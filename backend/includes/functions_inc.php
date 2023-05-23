<?php

//---------------CHECKS IF USER EXISTS IN DATABASE----------------//

    function ExistingUser($conn, $username){
        $sql = "SELECT * from user_csc WHERE user_name = ?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../../frontend/views/php/signup.php");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    //----------------------------------------------------------------//
    

    //----------------------MAIN LOGIN FUNCTION-----------------------//

    function UserLogin($conn, $username, $password){
        $existingUser = ExistingUser($conn, $username, $password);

        if($existingUser['user_name'] != $username){
            header("Location: ../../frontend/views/php/login.php?error=usernotfound");
            exit();
        }
        else if($existingUser['user_password'] != $password){
            header("Location: ../../frontend/views/php/login.php?error=incorrectpassword");
            exit();
        }
        else{
            header("Location: ../../frontend/views/php/main.php?login=successful");
            exit();
        }

    }

    //----------------------------------------------------------------//


    //---------------FUNCTION FOR OVERTIME TOTAL HOURS----------------//

    function TotalHours($timefrom, $timeto) {

        $from_part = explode(" ", $timefrom);
        $to_part = explode(" ", $timeto);
        
        $from_hour = (int)substr($from_part[0], 0, 2);
        $from_min = (int)substr($from_part[0], 3, 2);
        $from_period = strtoupper($from_part[1]);
        
        $to_hour = (int)substr($to_part[0], 0, 2);
        $to_min = (int)substr($to_part[0], 3, 2);
        $to_period = strtoupper($to_part[1]);


        if ($from_period == 'PM' && $from_hour != 12) {
            $from_hour += 12;
        } elseif ($from_period == 'AM' && $from_hour == 12) {
            $from_hour = 0;
        }
        
        if ($to_period == 'PM' && $to_hour != 12) {
            $to_hour += 12;
        } elseif ($to_period == 'AM' && $to_hour == 12) {
            $to_hour = 0;
        }
        
        $timeDiff = $to_hour * 60 + $to_min - $from_hour * 60 + $from_min;

        if ($timeDiff < 0) {
            $timeDiff += 24 * 60;
        }

        return $timeDiff / 60;
        
    }

    //----------------------------------------------------------------//


    //---------------FUNCTION FOR OVERTIME APPLICATION----------------//

    function OvertimeFiling($conn, $company, $department, $firstname, $middlename, $lastname, $position, $timefrom,
    $timeto, $tasks, $requested, $designation, $approved, $noted){

        $overtime = TotalHours($timefrom, $timeto);  

        $sql = "INSERT INTO overtime_csc (ot_company, ot_dept, ot_firstname, ot_middlename, ot_lastname, ot_position, ot_from, ot_to, ot_hours, ot_task, 
        ot_requester, ot_designation, ot_approver, ot_notedby) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../../frontend/views/php/main.php?error=overtimestatementfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ssssssssdsssss", $company, $department, $firstname, $middlename, $lastname, $position, 
        $timefrom, $timeto, $overtime, $tasks, $requested, $designation, $approved, $noted);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: ../../frontend/views/php/main.php?overtimefiling=successful");
        
    }

    //----------------------------------------------------------------//


    //-------------------FUNCTION FOR CHANGE SHIFT--------------------//

    function ChangeShift($conn, $company, $department, $firstname, $middlename, $lastname, $origin, $new,
    $reason, $approved, $noted, $date){

        $effectiveDate = date('Y-m-d', strtotime($date)); 

        $sql = "INSERT INTO changeshift_csc (cs_company, cs_dept, cs_firstname, cs_middlename, cs_lastname, cs_shiftorigin, cs_shiftnew,
        cs_reason, cs_approved, cs_noted, cs_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../../frontend/views/php/main.php?error=changeshiftstatementfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "sssssssssss", $company, $department, $firstname, $middlename, $lastname, $origin, 
        $new, $reason, $approved, $noted, $effectiveDate);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: ../../frontend/views/php/main.php?changeshiftfiling=successful");

    }

    //----------------------------------------------------------------//


    //-------------FUNCTION FOR OFFICIAL BUSINESS FILING-------------//

    function OfficialBusiness($conn, $company, $department, $firstname, $middlename, $lastname, $date, $client, $status, $reason, $approved){

        $dateEffective = date('Y-m-d', strtotime($date)); 

        $sql = "INSERT INTO officialbusiness_csc (ob_company, ob_dept, ob_firstname, ob_middlename, ob_lastname, ob_date, ob_client, ob_status,
        ob_reason, ob_approved) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../../frontend/views/php/main.php?error=officialbusiness_statementfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ssssssssss", $company, $department, $firstname, $middlename, $lastname, $dateEffective, 
        $client, $status, $reason, $approved);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: ../../frontend/views/php/main.php?officialbusinessfiling=successful");

    }