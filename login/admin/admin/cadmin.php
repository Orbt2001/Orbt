<?php
$host = "mysql:dbname=invoidsi_users;host=localhost";
$user = "root";
$pass = "";

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
    echo "Sucess";
}else{
    echo "ERROR";
}
?>
