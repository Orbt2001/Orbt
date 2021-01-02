<?php

    $to = 'orbt2001@gmail.com';
    $subject = '[CONTATO] '.$_POST['p3'];
    $html = "
    <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
        <img src='https://orbt.com.br/orbt/img/orbtwh.svg' width='100'>
    </div>

  
    
    <div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
    &nbsp;
    </div>
</body>
</html>";
        
$headers = "Content-type: text/html; charset=iso-8859-1";

    mail($to, $subject);
    return true;
?>