<?php
// var_dump($_POST['p2']);
if($_POST['p1']==''||$_POST['p2']==''||$_POST['p3']==''||$_POST['p4']==''){
    echo 0;
}else{
    $to = 'atendimento@orbt.com.br';
    $subject = '[CONTATO] '.$_POST['p3'];
    $body = "
    <html>
    <body>
    <div style='background-color:#000; padding: 20px 20px;'>
            <img src='https://orbt.com.br/orbt/img/icon.png' width='100'>
        </div>
    
        <div style='text-align:center; margin: 50px 10px;'>
        ".$_POST['p1']." entrou em contato através do site: <br>".nl2br($_POST['p4'])."
        <br> Email para contato:".$_POST['p2']."
            </div>
        
        <div style='background-color:#000; padding: 20px 20px;'>
        &nbsp;
        </div>
    </body>
    </html>";
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: '.$_POST['p3'].' <'.$_POST['p2'].'>';
    
    $ret = mail($to, $subject, $body, $headers);
    echo $ret;
}
?>