<?php

    //----------------------------------------------------------------------------//
    //            DOCUMENT HANDLING ALL THE SCRIPT FOR THE USER SIGNUP            //
    //----------------------------------------------------------------------------//

    //--- CHECKS IF THE USER CLICKS THE 'signup_submit' NAMED BUTTON ---//
    if(isset($_POST['signup_submit'])){

        //--- VARIABLE DECLARATIONS BASED ON THE USER INPUT ---//
        $firstname = $_POST['signup_firstname'];
        $lastname = $_POST['signup_lastname'];
        $username = $_POST['signup_username'];
        $email = $_POST['signup_email'];
        $company = $_POST['signup_company'];
        $department = $_POST['signup_dep'];
        $password = $_POST['signup_pass'];
        $cfrmpass = $_POST['signup_conpass'];

        //--- REQUIRES THE NECESSARY CODE/DOCUMENTS TO PROPERLY FUNCTION ---//
        require_once 'dbconn_inc.php';
        require_once 'functions_inc.php';

        //--- CHECKS IF THE VALUE OF THE INPUTTED PASSWORD MATCHES THE INPUTTED VALUE OF THE CONFIRM PASSWORD ---//
        if(PassVerify($password, $cfrmpass) !== false){

            //--- TAKES USER BACK TO THE SIGNUP PAGE 'signup.php' ALONG THE ERROR MESSAGE EMBEDDED TO THE URL ---//
            header("Location: ../../frontend/views/php.signup.php?error=passwordUnmatch&signup_firstname=" . $firstname . 
            "&signup_lastname=" . $lastname . "&signup_username=" . $username . "&signup_email=" . $email . "&signup_company=" . $company . 
            "&signup_department=" . $department);
            exit();
        }

        //--- CHECKS IF THE INPUTTED USERNAME IS VALID ---//
        if(UidVerify($username) !== false){
            
            //--- TAKES USER BACK TO THE SIGNUP PAGE 'signup.php' ALONG THE ERROR MESSAGE EMBEDDED TO THE URL ---//
            header("Location: ../../frontend/views/php.signup.php?error=invalidusername&signup_firstname=" . $firstname . 
            "&signup_lastname=" . $lastname . "&signup_email=" . $email . "&signup_company=" . $company . 
            "&signup_department=" . $department);
            exit();
        }

        //--- CHECKS IF THE INPUTTED USERNAME/EMAIL ALREADY EXISTS IN THE DATABASE ---//
        if(ExistingUser($conn, $username, $email) !== false){

            //--- TAKES USER BACK TO THE SIGNUP PAGE 'signup.php' ALONG THE ERROR MESSAGE EMBEDDED TO THE URL ---//
            header("Location: ../../frontend/views/php/signup.php?error=useralreadyexist");
        }

        //--- FUNCTION CALLED FROM THE 'functions_inc.php' RESPONSIBLE FOR THE DATA INSERTION TO THE DATABASE ---//
        UserSignup($conn, $firstname, $lastname, $username, $email, $company, $department, $password);

    }
    else{

        //--- TAKES USER BACK TO THE SIGNUP PAGE 'signup.php' WHENEVER DATA INSERTION FAILS ---//
        header("Location: ../../frontend/views/php/signup.php?SignUpinsert=failed");
        exit();
    }

?>