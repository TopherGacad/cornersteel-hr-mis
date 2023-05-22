<?php

    if(isset($_POST['overtime-save'])){
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

        OvertimeFiling($conn, $company, $department, $firstname, $middlename, $lastname, $position, $timefrom, $timeto, $tasks, $requested, $designation, $approved, $noted);{
        }

    }
    else{
        header("Location: ../../frontend/views/php/main.php?overtimefailed");
        exit();
    }

        



//     // Overtime Code //
//     require_once 'dbconn_inc.php';

//     // Get the data from the form
//     $ot_company = $_POST['ot_company'];
//     $otDepartment = $_POST['ot_department'];
//     $ot_firstname = $_POST['ot_firstname'];
//     $ot_midname = $_POST['ot_midname'];
//     $ot_lastname = $_POST['ot_lastname'];
//     $ot_position = $_POST['ot_position'];
//     $ot_timeFrom = $_POST['ot_timeFrom'];
//     $ot_timeTo = $_POST['ot_timeTo'];
//     $ot_task = $_POST['ot_task'];
//     $ot_requestedBy = $_POST['ot_requestedBy'];
//     $ot_designation = $_POST['ot_designation'];
//     $ot_approvedBy = $_POST['ot_approvedBy'];
//     // $ot_dates = $_POST['ot_dates'];
//     $ot_noteBy = $_POST['ot_noteBy'];
//     $ot_totalHours = $_POST['ot_totalHours'];

    
    

//     // Insert the data into the database
//     $sql = "INSERT INTO overtime (ot_firstname, ot_midname, ot_lastname, ot_position, ot_timeFrom, ot_timeTo, ot_task, ot_requestedBy, ot_designation, ot_approvedBy, ot_noteBy) VALUES ('$ot_firstname', '$ot_midname', '$ot_lastname', '$ot_position', '$ot_timeFrom', '$ot_timeTo', '$ot_task', '$ot_requestedBy', '$ot_designation', '$ot_approvedBy', '$ot_noteBy')";
//         if (mysqli_query($conn, $sql)) {
//             echo "Data inserted successfully";
//         } else {
//             echo "Error inserting data: " . mysqli_error($conn);
//         }
//     //if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         //$ot_company = $_POST["ot_company"];
//         //$ot_department = $_POST["ot_department"];
        
//     //}

//     if (mysqli($conn, $sql)) {

//     }
//     // Close the database connection
//     $conn->close();
// 