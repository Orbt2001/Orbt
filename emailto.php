
<?php

    $to = 'orbt2001@gmail.com';
    $subject = '[CONTATO] '.$_POST['p3'];
    $body = echo <html>
    echo <body>
    echo <div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
    echo <img src='https://orbt.com.br/orbt/img/orbtwh.svg' width='100'>
    echo  </div>
    
        echo  <div style='text-align:center; margin: 50px 10px;'>
        ".$_POST['p1']." entrou em contato através do site: <br>".$_POST['p4']."
        echo <br> Email para contato:".$_POST['p2']."
        echo   </div>
        
        echo  <div style='background-color:rgba(0,0,0,0.5); padding: 20px 20px;'>
        echo &nbsp;
        echo  </div>
        echo </body>
        echo</html>;
    $headers = 'From: '.$_POST['p2'].'\r\n'.'Content-type: text/html; charset=UTF-8';

    mail($to,$subject,$body,$headers);
    return true;
?>