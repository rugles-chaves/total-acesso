<?php 
include './model/header.php'
?>

<center>
<h1>Cadastro de Usuário</h1>
                           
<div class="column" style="background-color:#bbb;"></div>
                                    
<div class="row">
            <div class="column" style="background-color:#aaa;">
            <form  action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post" enctype="multipart/form-data" name="cadastro"  >

            <label class="w3-text-blue"><b>ID</b></label>
            <input class="w3-input w3-border" name="cod" type="text"></p>
            <p> 
            <label class="w3-text-blue"><b>NOME</b></label>
            <input class="w3-input w3-border" name="nome" type="text"></p>
            <p> 
            <label class="w3-text-blue"><b>E-MAIL</b></label>
            <input class="w3-input w3-border" name="email" type="text"></p>
            <p>
                
            <label class="w3-text-blue"><b>FOTO</b></label>
            <input class="w3-input w3-border" type="file" name="foto"></p>
            <p>
            <label class="w3-text-blue"><b>CARRO</b></label>
            <input class="w3-input w3-border" type="file" name="foto2"></p>
            <p>

            <input class="w3-btn w3-blue" type="submit" name="cadastrar" value="Cadastrar" />
            </form>
  </div>
  
  <div class="column" style="background-color:#ccc;"></div>
</div>
            

</center>
       


<?php
// Conexão com o banco de dados
$conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão.");
$db = @mysql_select_db("novo", $conn) or die ("Problemas na conexão");
// Se o usuário clicou no botão cadastrar efetua as ações
if (isset($_POST['cadastrar'])) {
    
    // Recupera os dados dos campos
    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $foto = $_FILES["foto"];
    $foto2 = $_FILES["foto2"];
   
    
    // Se a foto estiver sido selecionada
    if (!empty($foto["name"])) {
        
        // Largura máxima em pixels
        $largura = 150;
        // Altura máxima em pixels
        $altura = 180;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 1000;
        $error = array();
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
            $error[1] = "Isso não é uma imagem.";
            } 
    
        // Se não houver nenhum erro
        if (count($error) == 0) {
        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "fotos/" . $nome_imagem;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
         
        }

            // Se não houver nenhum erro
            if (count($error) == 0) {
        
                // Pega extensão da imagem
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto2["name"], $ext);
                // Gera um nome único para a imagem
                $nome_imagem2 = md5(uniqid(time())) . "." . $ext[1];
                // Caminho de onde ficará a imagem
                $caminho_imagem2 = "fotos/" . $nome_imagem2;
                // Faz o upload da imagem para seu respectivo caminho
                move_uploaded_file($foto2["tmp_name"], $caminho_imagem2);
            
                // Insere os dados no banco
                $sql = mysql_query("INSERT INTO usuarios VALUES ('',  '".$cod."','".$nome."', '".$email."', '".$nome_imagem."', '".$nome_imagem2."')");
            
                // Se os dados forem inseridos com sucesso
                if ($sql){
                    echo "Você foi cadastrado com sucesso.";
                    
                }
            }
    
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "<br />";
            }
        }
    }
}
?>
<?php
include './model/footer.php'
?>