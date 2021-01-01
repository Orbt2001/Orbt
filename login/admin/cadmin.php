<?php
$host = "mysql:dbname=u446125544_orbt;host=localhost";
$user = "u446125544_admin";
$pass = "IxP2552*";

try{
   $pdo = new PDO($host, $user, $pass); 
}catch (PDOExecption $e){
    echo "Falha: ". $e->getMessage();
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = $pdo->query("INSERT INTO admincad SET nome='$nome',  email='$email', senha='$senha'");

if($sql->rowCount() > 0){
    header('Location: https://orbt.com.br/orbt/login/admin/admin.php');
}else{
    header('Location: https://orbt.com.br/orbt/login/admin/adminerror.php');
}
?>
