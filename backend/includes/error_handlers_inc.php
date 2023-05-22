<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "incorrectpassword"){
            echo '<script> window.alert("Wrong Password") </script>';
        }
        else if($_GET["error"] == "usernotfound"){
            echo '<script> window.alert("User not found") </script>';
        }
    }
