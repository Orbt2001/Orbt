<?php
$host = "mysql:dbname=u446125544_orbt;host=localhost";
$user = "u446125544_admin";
$pass = "IxP2552*";
try{
    $pdo = new PDO($host, $user, $pass);
} catch (PDOExecption $e){
    echo "Falha: ".$e->getMessage();
}

$nome = $_POST['nome'];
$snome = $_POST['snome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cpf = $_POST['cpf'];
$rz = $_POST['rz'];
$senha = md5($_POST['senha']);

$sql = $pdo->query("INSERT INTO siscad SET nome='$nome', snome='$snome', email='$email', telefone='$tel', cidade='$cidade', estado='$estado', cpf='$cpf', rz='$rz', senha='$senha'");

if($sql->rowCount() > 0){
    header ('Location: https://orbt.com.br/orbt/login/admin/cadastrar.php');
}else{
    header ('Location: https://orbt.com.br/orbt/login/admin/caderror.php');
}

?>