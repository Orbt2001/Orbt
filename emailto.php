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
$headers = 'From: '.$_POST['p2'].'\r\n'.
    'Content-type: text/html; charset=iso-8859-1rn'.
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $html);

?>