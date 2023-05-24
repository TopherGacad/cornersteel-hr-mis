<?php
    if(isset($_POST['overtime-update'])){
        $overtimeid = $_POST['id'];
        $company = $_POST['ot_company'];
        $department = $_POST['ot_department'];
        $firstname = $_POST['ot_firstname'];
        $middlename = $_POST['ot_midname'];
        $lastname = $_POST['ot_lastname'];
        $position = $_POST['ot_position'];
        $timefrom = $_POST['ot_timeFrom'];
        $timeto = $_POST['ot_timeTo'];
        $tasks = $_POST['ot_task'];
        $requested = $_POST['ot_requestedBy'];
        $designation = $_POST['ot_designation'];
        $approved = $_POST['ot_approvedBy'];
        $noted = $_POST['ot_noteBy'];

        require_once 'dbconn_inc.php';
        require_once 'functions_inc.php';

        OvertimeEdit($conn, $overtimeid, $company, $department, $firstname, $middlename, $lastname, $position, $timefrom, $timeto, $tasks, $requested, $designation, $approved, $noted);{
        }

    }
    else{   
        header("Location: ../../frontend/views/php/overtime.php?overtimefailed");
        exit();
    }

        
