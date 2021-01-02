<?php
// var_dump($_POST['p2']);
$to = 'orbt2001@gmail.com';
$subject = '[CONTATO] '.$_POST['p3'];
$body = "
<html>
<body>
<div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
        <img src='https://orbt.com.br/orbt/img/orbtwh.svg' width='100'>
    </div>

    <div style='text-align:center; margin: 50px 10px;'>
    ".$_POST['p1']." entrou em contato através do site: <br>".$_POST['p4']."
    <br> Email para contato:".$_POST['p2']."
        </div>
    
    <div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
    &nbsp;
    </div>
</body>
</html>";

$headers = 'Content-Type: text/html; charset=utf-8';


$ret = mail($to, $subject, $body);
return $ret;
?>