<?php
    if(isset($_POST['signup_submit'])){
        $firstname = $_POST['signup_firstname'];
        $lastname = $_POST['signup_lastname'];
        $username = $_POST['signup_username'];
        $email = $_POST['signup_email'];
        $company = $_POST['signup_company'];
        $department = $_POST['signup_dep'];
        $password = $_POST['signup_pass'];
        $cfrmpass = $_POST['signup_conpass'];

        require_once 'dbconn_inc.php';
        require_once 'functions_inc.php';

        if(PassVerify($password, $cfrmpass) !== false){
            header("Location: ../../frontend/views/php.signup.php?error=unmatchingpasswords&signup_firstname=" . $firstname . 
            "&signup_lastname=" . $lastname . "&signup_username=" . $username . "&signup_email=" . $email . "&signup_company=" . $company . 
            "&signup_department=" . $department);
            exit();
        }

        if(UidVerify($username) !== false){
            header("Location: ../../frontend/views/php.signup.php?error=invalidusername&signup_firstname=" . $firstname . 
            "&signup_lastname=" . $lastname . "&signup_email=" . $email . "&signup_company=" . $company . 
            "&signup_department=" . $department);
            exit();
        }

        if(ExistingUser($conn, $username, $email) !== false){
            header("Location: ../../frontend/views/php.signup.php?error=userexists");
        }

        UserSignup($conn, $firstname, $lastname, $username, $email, $company, $department, $password);{
        }

    }
    else{
        header("Location: ../../frontend/views/php/main.php?SignUpfailed");
        exit();
    }

?>