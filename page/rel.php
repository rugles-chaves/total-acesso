<?php 
//include "./control/ok.php";
?>

<!DOCTYPE html>
<html lang="en"> 

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ESTOQUE TSM</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

</head>

<body>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <center><h1 class="page-header">Relatórios de Estoque</h1></div>
             <center>
                        <form method="post" >
                        <div class="panel-body">
                            <table width="70%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                       <!-- <th>Nº OS</th> -->
                                        <th>Empresa</th>
                                        <th>Produto</th>
                                        <th>Quantidade(s)</th>   
                                        <th>Fornecedor</th> 
                                        <th>Tipo</th> 
                                       
                                    </tr>
                                </thead>
                                 
                                    <?php
                                                                           //verifica se existe conexão com bd, caso não tenta criar uma nova
                                        $conexao = mysql_connect("localhost","root","") //porta, usuário, senha
                                        or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
                                        
                                        $select_db = mysql_select_db("novo"); //seleciona o banco de dados

                                        if (!$select_db) {
                                            
                                            echo "ERRO DB";
                                        }
                                        $sql = mysql_query("Select * From estoque ORDER BY id DESC LIMIT 1 ");
                                        while($exibe = mysql_fetch_assoc($sql)){
                                    ?>
                                    

                                    <img src="<?php  $img?>" alt="some text" >
                                   
                                    
                                    <tr class="odd gradeX">
                                       <!-- <td width="20" class="center"><?php// echo $exibe["os"]; ?></td> -->
                                        <td><?php echo $exibe["empresa"]; ?></td>
                                        <td><?php echo $exibe["nome"]; ?></td>
                                        <td class="center"><?php echo $exibe["quantidade"]; ?></td>
                                        <td class="center"><?php echo $exibe["fornecedor"]; ?></td>
                                        <td width="20" class="center"><?php echo $exibe["id"]; ?></td> 
                                        
                                        
                                    <?php 
                                  }
                            
                                ?>  
                                
                            </table>
                          </form>
                          </center>  
                           <br>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
         
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>

