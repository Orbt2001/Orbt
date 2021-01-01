<?php
$host = "mysql:dbname=u446125544_orbt;host=localhost";
$user = "u446125544_admin";
$pass = "IxP2552*";
try{
    $con = new PDO($host, $user, $pass);
} catch (PDOExecption $e){
    echo "Falha: ".$e->getMessage();
}

$consulta = "SELECT * FROM siscad";
$con = mysqli_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>Código</td>
      <td>Nome</td>
      <td>E-mail</td>
      <td>Data de Cadastro</td>
      <td>Ação</td>
    </tr>
    <?php while($dado = $con->fetch_array()) { ?>
    <tr>
      <td><?php echo $dado['nome']; ?></td>
      <td><?php echo $dado['snome']; ?></td>
      <td><?php echo $dado['email']; ?></td>
      <td>
        <a href="usu_editar.php?codigo=<?php echo $dado['usu_codigo']; ?>">Editar</a>
        <a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>

</html>
