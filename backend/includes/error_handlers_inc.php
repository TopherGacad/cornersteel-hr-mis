<?php

    //----------------------------------------------------------------------------//
    //           DOCUMENT HANDLING ALL THE ALERT SCRIPTS FOR THE ERRORS           //
    //----------------------------------------------------------------------------//

    //--- GETS THE ERROR VALUE FROM URL UPON ENCOUNTERING AN ERROR ---//
    if(isset($_GET["error"])){

        //--- VALIDATES IF THE VALUE MATCHES THE CONDITION ---//
        if($_GET["error"] == "incorrectpassword"){

            //--- ECHOS AN ALERT SCRIPT BASED ON THE ERROR VALUE ---//
            echo '<script> alert("Wrong Password") </script>';
        }
        else if($_GET["error"] == "usernotfound"){
            echo '<script> alert("User not found") </script>';
        }
    }

    if(isset($_GET["error"])){
        if($_GET["error"] == "incorrectpassword"){
            echo '<script> alert("Wrong Password") </script>';
        }
        else if($_GET["error"] == "usernotfound"){
            echo '<script> alert("User not found") </script>';
        }
    }