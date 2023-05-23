<?php
    session_start();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/sign-up.css">
    <link rel="icon" href="../../public/assets/comfac-logo-transparent.png">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php include "../../../backend/includes/error_handlers_inc.php"?>
    
    <div class="login-page-container">
        
        <!-- PAGE HEADER -->
        <div class="head-container">
            <img class="main-logo" src="../../public/assets/comfac-logo.png" alt="comfac global group logo">
        </div>
        
        <!-- LOGIN FORM -->
        <div class="login-contain">
            <div class="login-header">
                <img class="form-logo" src="../../public/assets/comfac-logo.png"alt="">
                <p class="login-title">REGISTER AN ACCOUNT</p>
            </div>
    
            <form action="../../../backend/includes/login_inc.php" method="post">
                <div class="layout-container">
                    
                    <div class="login-left">
                        <!-- FIRSTNAME FIELD -->
                        <div class="fields">
                            <label for="signup-firstname">Firstname <span> *</span></label>
                            <input 
                                id="signup-firstname" 
                                name="signup-firstname" 
                                type="text" 
                                placeholder="Juan"
                                autofocus
                                required>
                        </div>

                        <!-- LASTNAME FIELD -->
                        <div class="fields">
                            <label for="signup-lastname">Lastname <span> *</span></label>
                            <input 
                                id="signup-lastname" 
                                name="signup-lastname" 
                                type="text" 
                                placeholder="Dela Cruz"
                                required>
                        </div>

                        <!-- USERNAME FIELD -->
                        <div class="fields">
                            <label for="signup-username">Username <span> *</span></label>
                            <input 
                                id="signup-username" 
                                name="signup-username"  
                                type="text" 
                                placeholder="juan@example.com"
                                required>
                        </div>

                        <!-- COMPANY FIELD -->
                        <div class="fields">
                            <label for="signup-company">Company <span> *</span></label>
                            <select name="signup-company" id="signup-company" required>
                                <option value="" selected disable>Select Company</option>
                                <option value="CSC">Cornersteel Systems Corp</option>
                                <option value="Comfac">Comfac</option>
                                <option value="ESCO">ESCO</option>
                            </select>
                        </div>
                    </div>

                    <div class="login-right">
                        <!-- DEPARTMENT FIELD -->
                        <div class="fields">
                            <label for="signup-dep">Department <span> *</span></label>
                            <select name="signup-dep" id="signup-dep">
                                <option value="" selected disable>Select Department</option>
                                <option value="PID">Product Installation Department</option>
                                <option value="HR">Human Resources</option>
                                <option value="">Accounts</option>
                            </select>
                        </div>

                        <!-- PASSWORD FIELD -->
                        <div class="fields">
                            <label for="signup-pass">Password <span> *</span></label>
                            <input
                                id="signup-pass"
                                name="signup-pass" 
                                type="password"
                                Placeholder="8-16 characters only"
                                required>
                        </div>

                        <!-- CONFIRM PASSWORD FIELD -->
                        <div class="fields">
                            <label for="signup-conpass">Confirm Password <span> *</span></label>
                            <input
                                id="signup-conpass"
                                name="signup-conpass" 
                                type="password"
                                required>
                        </div>

                        <!-- FORGOT PASSWORD LINK -->
                        <div class="forgot-pass-container">
                            <div class="see-pass-container">
                                <input class="see-pass" type="checkbox" id="see-pass">
                                <label class="see-pass-label" for="see-pass">See password</label>
                            </div>
                        </div>

                        <!-- BTN & LINK CONTAINER -->
                        <div class="link-container">
                            <input class="Btn-login" type="submit" value="Sign in" name="login-submit">
                        </div>
                    </div>

                </div>
                
                <p>Already have an account? <a href="../../views/php/login.php">Login here.</a></p>
            </form>
        </div>
    </div>
    
    <!-- LOGIN SCRIPT -->
    <script src="../../js/sign-up.js"></script>
</body>
</html>