'use strict';



var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "novo"
});

var //parser = require('xml2json'),
path = require('path'),
protocol = require('./protocol/8x.js'),
//storage = require('node-persist'),
chalk = require('chalk'),
util = require('util'),
contadorMensagem = 0,
conexoes = [],
atividade = [],
fs = require('fs'),
msgDebug = false,
totalConexoes = 0,
tentativaConexao = 0,
matricula = null,

separador = '===================================================================================\n';

//fazendo a conexão global
//var connectionFactory = require('./config/sql');

    console.log(separador+getDate()+' - Iniciando servidor na porta 3000.');

    var servidor = require('net').createServer().listen(3000);

    servidor.on('close', function() {
    	console.log(separador+getDate());
        console.log(chalk.bold.red(getDate()+' - O servidor foi finalizado.'));
    });

    servidor.on('error', function() {
    	console.log(separador+getDate());
        console.log(chalk.bold.red(getDate()+' - Erro no servidor.'));
    });

    servidor.on('listening', function() {
        console.log(getDate()+' - Aguardando por novas conexões...');
    });

    servidor.on('connection', function(conexao) {
        conexoes.push(conexao);  // A ideia é fazer um array de conexões dizendo quem é e qual protocolo
        var index = conexoes.indexOf(conexao); 		        
        var ip;
        var porta = conexao.remotePort;
        var numeroConexao = Number(totalConexoes);
        var mensagem;

        totalConexoes += 1;
        
        if(conexao.remoteAddress && typeof conexao.remoteAddress === 'string')
        	ip = mascaraIp(conexao.remoteAddress.replace('::ffff:',''));

       


        var paraAtividade = function(conexao) {
          if(msgDebug) console.log('\nPARANDO ATIVIDADE');
          if(index > -1 && atividade[index]) {
              clearInterval(atividade[index]);
              if(msgDebug) console.log('SUCESSO AO PARAR ATIVIDADE '+index);
          }
      };


      var paraConexao = function(conexao) {
          conexao.destroy();
          console.log(separador+getDate());            
          console.log(chalk.bold.red('Fim da Conexão #'+numeroConexao));
          console.log('IP: ' + ip + ' / Porta: ' + porta);

          var index = conexoes.indexOf(conexao); 		        
          if(index > -1) 
           conexoes.splice(index, 1);
   }

   console.log(separador+getDate());
   console.log(chalk.yellow('Início da Conexão #'+numeroConexao));
   console.log('IP: ' + ip + ' / Porta: ' + porta);

  

   console.log('Iniciando atividade');
    atividade[index] = setInterval(function() {
        conexao.write( protocol.codificaMensagem({
          operacao: 'Mantem atividade',
      }) );

    }, 60*4*1000);

   conexao.on('data', function(mensagem) {
      contadorMensagem++;
      mensagem = mensagem.toString('utf8').trim().replace(/^\s+|\s+$/g,'');

      var decodificacao = protocol.decodificaMensagem({
        mensagem: mensagem
    });


   paraAtividade(conexao);

   console.log(separador+getDate());
   console.log('Mensagem da Conexão #'+numeroConexao);
   console.log('IP: ' + ip + ' / Porta: ' + porta);
   console.log('Mensagem: '+mensagem);

   if(decodificacao.status === 'sucesso') {
    var options,
         delay;

    console.log('Operação: '+decodificacao.operacao);


     switch(decodificacao.operacao) {
        case 'Erro':
            console.log(chalk.red('Error: '+decodificacao.observacao));
        break;
        case 'Operação realizada com sucesso':
            console.log('Operação realizada com sucesso.');
        break;
        case 'Sucesso ao manter atividade':
            console.log('Sucesso ao manter atividade.');
        break;
        case 'Pedido de liberação':
             
             console.log('CARTAO: '+decodificacao.matricula+ '\n');

             console.log('LIBERAÇÂO: '+decodificacao.matricula+ '\n');

            // Inicio da liberação   
           
            con.query('select * from usuarios where cad ='+decodificacao.matricula, function(err, recordset) {
              
              
              if (recordset=="") {
                conexao.write(protocol.codificaMensagem({
                master: 0,
                operacao: 'Ação negada',
                mensagem_linha1: 'ACESSO NEGADO',
                mensagem_linha2: decodificacao.matricula
            })); 
                console.log('nao existe')    
              }else{
                var hoje = getDate()
                var sql = "update usuarios set data ='"+hoje+"' where cad ='"+decodificacao.matricula+"' ";
                //var sql = "INSERT INTO acessos (cad) VALUES ('"+decodificacao.matricula+"' )";
                con.query(sql, function (err, result) {
                if (err) throw err;
                console.log(getDate());
              });
                conexao.write(protocol.codificaMensagem({
                  master: 0,
                  operacao: 'Ação autorizada',
                  mensagem_linha1: 'VOLTE SEMPRE!',
                  mensagem_linha2: decodificacao.matricula
              }));
              
              }
            
            });





            
           /**
                                   
                                    if (decodificacao.matricula != "2" ) {
                                                                              
                                                conexao.write(protocol.codificaMensagem({
                                                    master: 0,
                                                    operacao: 'Ação negada',
                                                    mensagem_linha1: 'ACESSO NEGADO',
                                                    mensagem_linha2: decodificacao.matricula
                                                }));              
                                    }else{       
                                                conexao.write(protocol.codificaMensagem({
                                                    master: 0,
                                                    operacao: 'Ação autorizada',
                                                    mensagem_linha1: 'VOLTE SEMPRE!',
                                                    mensagem_linha2: decodificacao.matricula
                                                }));

                                           } */
            // Fim da liberação
                    
                    }
                }
            });
     }); 

function pad(n) {
    if(!n) n = '00';
    return n.toString().length === 1 ? '0'+n : n;
}

function mascaraIp(ip) {
    var pad = '000';
    var ipArray = ip.split('.');

    for (var i in ipArray){
        if(parseInt(ipArray[i]) > 255)
            ipArray[i] =  '255';
        ipArray[i] = pad.substring(0, pad.length - ipArray[i].length) + ipArray[i];
    }
    return ipArray.join('.');
}

function getDate() {
  var date = new Date(),
  year = date.getFullYear(),
  month = (date.getMonth() + 1).toString(),
  formatedMonth = (month.length === 1) ? ("0" + month) : month,
  day = date.getDate().toString(),
  formatedDay = (day.length === 1) ? ("0" + day) : day,
  hour = date.getHours().toString(),
  formatedHour = (hour.length === 1) ? ("0" + hour) : hour,
  minute = date.getMinutes().toString(),
  formatedMinute = (minute.length === 1) ? ("0" + minute) : minute,
  second = date.getSeconds().toString(),
  formatedSecond = (second.length === 1) ? ("0" + second) : second;
  return formatedDay + "/" + formatedMonth + "/" + year + " " + formatedHour + ':' + formatedMinute + ':' + formatedSecond;

};