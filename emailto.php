
<?php

    $to = 'orbt2001@gmail.com';
    $subject = '[CONTATO] '.$_POST['t3'];
    $html = "";
        
    $headers='Content-Type: text/html; charset="utf-8"';

    mail($to, $subject, $html, $headers);
    return true;
?>