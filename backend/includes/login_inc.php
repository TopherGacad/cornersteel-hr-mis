<?php

    if(isset($_POST['login_submit'])){
        $useremail = $_POST['login_username'];
        $password = $_POST['login_pass'];

        require_once 'dbconn_inc.php';
        require_once 'functions_inc.php';
    
        UserLogin($conn, $useremail, $password);{
        }
    }
    else{
        header("Location: ../../frontend/views/php/login.php?Loginfailed");
        exit();
    }