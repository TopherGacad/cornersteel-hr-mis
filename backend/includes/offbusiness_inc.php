<?php
    if(isset($_POST['offbusiness-save'])){
        $company = $_POST['ob_company'];
        $department = $_POST['ob_department'];
        $firstname = $_POST['ob_firstname'];
        $middlename = $_POST['ob_midname'];
        $lastname = $_POST['ob_lastname'];
        $date = $_POST['ob_date'];
        $client = $_POST['ob_client'];
        $status = $_POST['ob_status'];
        $reason = $_POST['ob_reason'];
        $approved = $_POST['ob_approvedBy'];


        require_once 'dbconn_inc.php';
        require_once 'functions_inc.php';

        OfficialBusiness($conn, $company, $department, $firstname, $middlename, $lastname, $date, $client, $status, $reason, $approved);{
        }
    }
    else{
        header("Location: ../../frontend/views/php/main.php?OfficialBusinessfailed");
        exit();
    }
    
            