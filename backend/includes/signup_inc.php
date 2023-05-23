<?php
    if(isset($_POST['signup_submit'])){
        $firstname = $_POST['signup_firstname'];
        $lastname = $_POST['signup_lastname'];
        $email = $_POST['signup_email'];
        $company = $_POST['signup_company'];
        $department = $_POST['signup_dep'];
        $password = $_POST['signup_pass'];
        $cpassword = $_POST['signup_conpass'];

        require_once 'dbconn_inc.php';
        require_once 'functions_inc.php';

        UserSignup($conn, $firstname, $lastname, $email, $company, $department, $password, $cpassword);{
        }
    }
    else{
        header("Location: ../../frontend/views/php/main.php?SignUpfailed");
        exit();
    }

?>