<?php
$host = "mysql:dbname=invoidsi_users;host=localhost";
$user = "invoidsi_users";
$pass = "IxP2552*";

try{
   $pdo = new PDO($host, $user, $pass); 
}catch (PDOExecption $e){
    echo "Falha: ". $e->getMessage();
}

$h = $_GET['h'];

if(!empty($h)){
    $pdo->query("UPDATE admincad SET status='1' WHERE MD5(id) = '$h'");
    echo "Cadastrado com sucesso!!"
}
?>