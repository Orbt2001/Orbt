<?php 
session_start();
session_destroy();
header("Location: https://orbt.com.br/orbt/login/ulogin/");
?>