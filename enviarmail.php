<?php
// var_dump($_POST['p2']);
$to = 'orbt2001@gmail.com';
$subject = '[CONTATO] '.$_POST['p3'];
$html = "
<html>
<body>
<div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
	<img src='https://orbt.com.br/indesfer/img/logo.png' width='100'>
</div>



<div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
&nbsp;
</div>
</body>
</html>";

$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $html);

?>