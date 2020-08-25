var mysql = require('mysql');
const { eachOf } = require('async');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "novo"
});
/**
con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "select * from usuarios";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log(result);
  });
});*/
var result = [];
$nub= '2';
con.query('select cad from usuarios where cad = '+$nub, function(err, result) {

// console.log (recordset.rowsAffected == 0)

  if (result =="") {

    console.log('nao existe')    

  }else{
  //  var sql = "INSERT INTO acessos (cad) VALUES ('"+$nub+"')";
   // con.query(sql, function (err, result) {
  //    if (err) throw err;

//converter para sring
const conv = JSON.stringify(result);
console.log('+++++++++++++++')
// console.log(conv)
var stringExemplo = conv.replace(/[{\[\] .!'@><| id cad '' ""{}://\\;&*()_+=]/g, '')
console.log(stringExemplo)



//  var resultado = JSON.parse(JSON.stringify(result));
//  console.log(resultado[0]);
 // return resolve(resultado[0]);
     // console.log(result);

  //  });
  }

});