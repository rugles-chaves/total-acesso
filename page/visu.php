<?php 
include '../model/s_menu.php'
?>

<?php
$conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão.");
$db = @mysql_select_db("novo", $conn) or die ("Problemas na conexão");
// Se o usuário clicou no botão cadastrar efetua as ações
// Seleciona todos os usuários
$sql = mysql_query("SELECT * FROM acessos ORDER BY id DESC LIMIT 1");
// Exibe as informações de cada usuário
while ($usuario = mysql_fetch_object($sql)) {
    // Exibimos a foto
   // echo "<img src='fotos/".$usuario->foto."' alt='Foto de exibição' /><br />";
   // echo "<img src='fotos/".$usuario->foto2."' alt='Foto de exibição' /><br />";
    // Exibimos o nome e email
  //  echo "<b>Nome:</b> " . $usuario->nome . "<br />";
  //  echo "<b>Email:</b> " . $usuario->email . "<br /><br />";
//}
?>
<meta http-equiv="refresh" content="1">
            <form action="#">
                    <fieldset>
                   
            <div class=figure>
                    <p> <?php echo "<img src='fotos/".$usuario->foto."' alt='Foto de exibição' width='400' height='400'/><br />"; ?>
                        
                    <p><?php echo "<b>NOME:</b> " . $usuario->nome . "<br />";  ?>
                    <p><?php echo "<b>RG:</b> " . $usuario->rg . "<br />";  ?>
                    <p><?php echo "<b>Nº SARAM:</b> " . $usuario->sarram . "<br />";  ?>
            </div>

            <div class=figure>
                    <p> <?php echo "<img src='fotos/".$usuario->foto2."' alt='Foto de exibição' width='400' height='400'/><br />"; ?>
                        
                    <p><?php echo "<b>PLACA:</b> " . $usuario->email . "<br />";  ?>
                    <p><?php echo "<b>MODELO:</b> " . $usuario->tipo_carr . "<br />";  ?>
                    <p><?php echo "<b>COR:</b> " . $usuario->cor_carr . "<br />";  ?>
                    </div>

                    
                    </fieldset>
            </form>
            
        <?php 
}
include '../model/footer.php'
?>
