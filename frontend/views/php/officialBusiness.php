<?php

    session_start();

    if(!isset($_SESSION['user-id'])){
        header("Location: ../../../frontend/views/php/login.php");
        exit();
    }

    include_once '../../../backend/includes/dbconn_inc.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM overtime_csc WHERE ot_id = $id;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo 'sql failed';
        }
        else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            $row = mysqli_fetch_assoc($result);

            $overtimeid = $row['ot_id'];
            $company = $row['ot_company'];
            $department = $row['ot_dept'];
            $firstname = $row['ot_firstname'];
            $middlename = $row['ot_middlename'];
            $lastname = $row['ot_lastname'];
            $position = $row['ot_position'];
            $timefrom = $row['ot_from'];
            $timeto = $row['ot_to'];
            $tasks = $row['ot_task'];
            $requested = $row['ot_requested'];      
            $designation = $row['ot_designation'];
            $approved = $row['ot_approved'];
            $noted = $row['ot_noted'];

            $formatfrom = date('H:i', strtotime($row['ot_from']));
            $formatto = date('H:i', strtotime($row['ot_to']));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Official Business Request</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/overtime.css">
    <!-- WEB ICON -->
    <link rel="icon" href="../../public/assets/comfac-logo-transparent.png">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- PAGE HEADER -->
    <div class="head-container">
        <a href="../../views/php/main.php"><img class="main-logo" src="../../public/assets/comfac-logo.png" alt="comfac global group logo"></a>
    </div>

        <div class="content-container">
            <form action="../../../backend/includes/otedit_inc.php" method="post" id="otEdit-form">
                <div class="ot-header">
                    <h3>Edit Official Business Request</h3>
                    <div class="btn-container">
                        <a href="../../views/php/main.php"><input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn"></a>
                        <button class="update-btn modal-btn" id="otEdit-update" type="submit" name="overtime-update">Update</button>
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo $overtimeid; ?>">

                <div class="employee-container">
                    <h3>Employee Details</h3>
                    <div class="emp-layout main">
                        <div class="left-side-emp section">
                            <!-- COMPANY FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="ob-company">Company <span> *</span></label>
                                <select class="dis-input" class="dis-input" class="dis-input" class="dis-input" name="ob_company" id="ob-company" required autofocus>
                                    <option value="" selected disabled>Select company</option>
                                    <option value="Comfac">Comfac Corporation</option>
                                    <option value="CSC">Cornersteel Systems Corporation</option>
                                    <option value="ESCO">ESCO</option>
                                </select>
                            </div>

                            <!-- DEPARTMENT FIELD -->
                            <div class="fields">
                                <label class="dis-input" class="dis-input" class="dis-input" for="ob-department">Department <span> *</span></label>
                                <select class="dis-input" class="dis-input" class="dis-input" name="ob_department" id="ob-department" required>
                                    <option value="" selected disabled>Select company</option>
                                    <option value="Accounts">Accounts</option>
                                    <option value="PID">Project Installation Dep</option>
                                    <option value="HR">Human Resources</option>
                                </select>
                            </div>

                            <!-- FIRSTNAME FIELD -->
                            <div class="fields">
                                <label class="dis-input" class="dis-input" class="dis-input" for="ob-firstname">Firstname <span> *</span></label>
                                <input class="dis-input" class="dis-input" class="dis-input" type="text" name="ob_firstname" id="ob-firstname" placeholder="Juan" required>
                            </div>
                        </div>

                        <div class="right-side-emp section">
                            
                            <!-- MIDDLE NAME -->
                            <div class="fields">
                                <label class="dis-input" class="dis-input" class="dis-input" for="ob-midname">Middlename</label>
                                <input class="dis-input" class="dis-input" class="dis-input" type="text" name="ob_midname" id="ob-midname" placeholder="Reyes">
                            </div>

                            <!-- LASTNAME FIELD -->
                            <div class="fields">
                                <label class="dis-input" class="dis-input" for="ob-lastname">Lastname <span> *</span></label>
                                <input class="dis-input" class="dis-input" type="text" name="ob_lastname" id="ob-lastname" placeholder="Dela Cruz" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="time-container">
                <h3>Status Details</h3>
                    <div class="time-layout main">
                        <div class="left-side-time section">
                            <!-- STATUS FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="ob-status">Status <span> *</span></label>
                                <select class="dis-input" name="ob_status" id="ob-status" required>
                                    <option value="" selected disabled>Select status</option>
                                    <option value="No Login">No Login</option>
                                    <option value="No Logout">No Logout</option>
                                    <option value="Both">Both</option>
                                </select>
                            </div>

                            <!-- DATE FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="ob-date">Date <span> *</span></label>
                                <input class="dis-input" type="date" name="" id="ob-date" required>
                            </div>
                        </div>

                        <div class="right-side-time section">
                           <!-- REASON FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="ob-reason">Reason<span> *</span></label>
                                <textarea class="dis-input" name="ob_reason" id="ob-reason" cols="30" rows="9" maxlength="150"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="approval-container">
                    <h3>Approval Details</h3>
                    <div class="main">
                        <div class="left-side-approve section">
                             <!-- AUTHORIZE CLIENT FIELD -->
                            <div class="fields">
                                <label class="dis-input" class="dis-input" for="ob-client">Authorize Client <span> *</span></label>
                                <input class="dis-input" class="dis-input" type="text" name="ob_client" id="ob-client" required>
                            </div>
                        </div>

                        <div class="right-side-approve section">
                            <!-- NOTED BY FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="ot-noteBy">Noted By <span> *</span></label>
                                <input class="dis-input" type="text" name="ot_noteBy" id="ot-noteBy" required>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>