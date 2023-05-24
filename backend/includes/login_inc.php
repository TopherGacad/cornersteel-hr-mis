<?php

    if(isset($_POST['login_submit'])){
        $user = $_POST['login_user'];
        $password = $_POST['login_pass'];

        require_once 'dbconn_inc.php';
        require_once 'functions_inc.php';
    
        UserLogin($conn, $user, $password);{
        }
    }
    else{
        header("Location: ../../frontend/views/php/login.php?Loginfailed");
        exit();
    }