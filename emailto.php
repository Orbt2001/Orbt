
<?php

    $to = 'orbt2001@gmail.com';
    $subject = '[CONTATO] '.$_POST['p3'];
    $html = "<html>
    <body>
    <div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
    <img src='https://orbt.com.br/orbt/img/orbtwh.svg' width='100'>
    </div>
    
        
        
        <div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
        &nbsp;
        </div>
        </body>
        </html>";
        
    $headers='Content-Type: text/html; charset="utf-8"';

    mail($to, $subject, $html, $headers);
    return true;
?>