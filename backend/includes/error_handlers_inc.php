<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "incorrectpassword"){
            echo '<script> alert("Wrong Password") </script>';
        }
        else if($_GET["error"] == "usernotfound"){
            echo '<script> alert("User not found") </script>';
        }
    }
