<?php

//-------------CHECKS IF USER EXISTS IN DATABASE------------------//

    function ExistingUser($conn, $username){
        $sql = "SELECT * from user WHERE user_name = ?;";
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
    
    //--------------------MAIN LOGIN FUNCTION-------------------------//

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