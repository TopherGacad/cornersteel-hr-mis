<?php
    if(isset($_POST['shift-save'])){
        $company = $_POST['shift_company'];
        $department = $_POST['shift_department'];
        $firstname = $_POST['shift_firstname'];
        $middlename = $_POST['shift_midname'];
        $lastname = $_POST['shift_lastname'];
        $date = $_POST['shift_date'];
        $origin = $_POST['shift_orig'];
        $new = $_POST['shift_new'];
        $reason = $_POST['shift_reason'];
        $approved = $_POST['shift_approvedBy'];
        $noted = $_POST['shift_noteBy'];


        require_once 'dbconn_inc.php';
        require_once 'functions_inc.php';

        ChangeShift($conn, $company, $department, $firstname, $middlename, $lastname, $origin, $new, $reason, $approved, $noted, $date);{
        }
    }
    else{
        header("Location: ../../frontend/views/php/main.php?changeshiftfailed");
        exit();
    }
    
            