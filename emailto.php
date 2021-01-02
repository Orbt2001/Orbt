<?php

    $to = 'orbt2001@gmail.com';
    $subject = '[CONTATO] '.$_POST['t3'];
    $html = "
    <html>
    <div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
    <img src='https://orbt.com.br/orbt/img/orbtwh.svg' width='100'>
    </div>

     <div style='text-align:center; margin: 50px 10px;'>
    ".$_POST['t1']." entrou em contato através do site:".$_POST['t4']."
    Email para contato:".$_POST['t2']."
    </div>

<div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
&nbsp;
</div>
</html>";
        
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    mail($to, $subject, $html, $headers);
    return true;
?>