<?php 
    session_start();
    unset($_POST['email']);
    unset($_POST['senha']);
    header('Location: login.php')
?>