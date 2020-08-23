
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de usuário</title>
</head>
<body>
<h1>Cadastro de Usuário</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="cadastro" >

ID:<br />
<input type="text" name="cod" /><br /><br />

Nome:<br />
<input type="text" name="nome" /><br /><br />
Email:<br />
<input type="text" name="email" /><br /><br />
Foto de exibição:<br />
<input type="file" name="foto" /><br /><br />

Foto de exibição2:<br />
<input type="file" name="foto2" /><br /><br />

<input type="submit" name="cadastrar" value="Cadastrar" />
</form>
</body>
</html>

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