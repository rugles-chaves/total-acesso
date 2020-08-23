<?php 
include './model/s_menu.php'
?>

<?php
$conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão.");
$db = @mysql_select_db("novo", $conn) or die ("Problemas na conexão");
// Se o usuário clicou no botão cadastrar efetua as ações
// Seleciona todos os usuários
$sql = mysql_query("SELECT * FROM usuarios ORDER BY id DESC LIMIT 1");
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
            <form action="#">
                    <fieldset>
                   
            <div class=figure>
                    <p> <?php echo "<img src='fotos/".$usuario->foto."' alt='Foto de exibição' width='300' height='500'/><br />"; ?>
                        
                    <p><?php echo "<b>NOME:</b> " . $usuario->nome . "<br />";  ?>
            </div>

            <div class=figure>
                    <p> <?php echo "<img src='fotos/".$usuario->foto2."' alt='Foto de exibição' width='300' height='500'/><br />"; ?>
                        
                    <p><?php echo "<b>PLACA:</b> " . $usuario->email . "<br />";  ?>
                    </div>

                    
                    </fieldset>
            </form>
            
        <?php 
}
include './model/footer.php'
?>
