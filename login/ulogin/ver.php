<?php

session_start();
$host = "mysql:dbname=u446125544_orbt;host=localhost";
$user = "u446125544_admin";
$pass = "IxP2552*";



try{

   $pdo = new PDO($host, $user, $pass); 

}catch (PDOExecption $e){

    echo "Falha: ". $e->getMessage();

}



$email = $_POST['email'];
$senha = md5($_POST['senha']);



$sql = $pdo->query("SELECT * FROM admincad WHERE email='$email' and senha='$senha'");



if ($sql->rowCount() >0){

    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location: https://orbt.com.br/orbt/login/admin/index.php');

}else{

    header ('Location: error.html');

}