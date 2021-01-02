
<?php

    $to = 'orbt2001@gmail.com';
    $subject = '[CONTATO] '.$_POST['p3'];
    $body = "<html>
    <body>
    <div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
    <img src='https://orbt.com.br/orbt/img/orbtwh.svg' width='100'>
    </div>
    
        
        
        <div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
        &nbsp;
        </div>
        </body>
        </html>";
    $headers = 'From: '.$_POST['p2'].'\r\n'.'Content-type: text/html; charset=UTF-8';

    mail($to, $subject, $body);
    return true;
?>