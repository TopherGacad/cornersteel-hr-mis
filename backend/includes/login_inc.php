<?php

    if(isset($_POST['login-submit'])){
        $username = $_POST['login-username'];
        $password = $_POST['login-pass'];

        require_once 'dbconn_inc.php';
        require_once 'functions_inc.php';
    
        UserLogin($conn, $username, $password);
    }
    else{
        header("Location: ../../frontend/views/php/login.php");
        exit();
    }