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
    <title>Edit Change Shift Request</title>

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
                    <h3>Edit Overtime Request</h3>
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
                                <label class="dis-input" for="shift-company">Company <span> *</span></label>
                                <select class="dis-input" name="shift_company" id="shift-company" required autofocus>
                                    <option value="" selected disabled>Select company</option>
                                    <option value="Comfac">Comfac Corporation</option>
                                    <option value="CSC">Cornersteel Systems Corporation</option>
                                    <option value="ESCO">ESCO</option>
                                </select>
                            </div>

                            <!-- DEPARTMENT FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="shift-department">Department <span> *</span></label>
                                <select class="dis-input" class="dis-input" name="shift_department" id="shift-department" required>
                                    <option value="" selected disabled>Select company</option>
                                    <option value="Accounts">Accounts</option>
                                    <option value="PID">Project Installation Dep</option>
                                    <option value="HR">Human Resources</option>
                                </select>
                            </div>

                            <!-- FIRSTNAME FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="shift-firstname">Firstname <span> *</span></label>
                                <input class="dis-input" type="text" name="shift_firstname" id="shift-firstname" placeholder="Juan" required>
                            </div>
                        </div>

                        <div class="right-side-emp section">
                            
                            <!-- MIDDLE NAME -->
                            <div class="fields">
                                <label class="dis-input" for="shift-midname">Middlename</label>
                                <input class="dis-input" type="text" name="shift_midname" id="shift-midname" placeholder="Reyes">
                            </div>

                            <!-- LASTNAME FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="shift-lastname">Lastname <span> *</span></label>
                                <input class="dis-input" type="text" name="shift_lastname" id="shift-lastname" placeholder="Dela Cruz" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="time-container">
                <h3>Shift Details</h3>
                    <div class="time-layout main">
                        <div class="left-side-time section">
                            <!-- ORIGINAL SHIFT FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="shift-orig"> Original shift<span> *</span></label>
                                <select class="dis-input" name="shift_orig" id="shift-orig" required>
                                    <option value="" selected disabled>Select shift</option>
                                    <option value="type 1">Shift type 1: 8:00AM - 5:00PM</option>
                                    <option value="type 2">Shift type 2: 9:00AM - 7:00PM</option>
                                    <option value="type 3">Shift type 3: 6:00AM - 3:00PM</option>
                                </select>
                            </div> 

                            <!-- NEW SHIFT FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="shift-new"> New shift<span> *</span></label>
                                <select class="dis-input" name="shift_new" id="shift-new" required>
                                    <option value="" selected disabled>Select shift</option>
                                    <option value="type 1">Shift type 1: 8:00AM - 5:00PM</option>
                                    <option value="type 2">Shift type 2: 9:00AM - 7:00PM</option>
                                    <option value="type 3">Shift type 3: 6:00AM - 3:00PM</option>
                                </select>
                            </div>

                            <!-- DATE EFFECTIVE -->
                            <div class="fields">
                                <label class="dis-input" for="shift-date">Date Effective <span> *</span></label>
                                <input class="dis-input" type="date" id="shift-date" name="shift_date" required>
                            </div>
                        </div>
                        
                        <div class="right-side-time section">
                           <!-- REASON FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="shift-reason">Reason<span> *</span></label>
                                <textarea class="dis-input" name="shift_reason" id="shift-reason" cols="30" rows="9" maxlength="150" placeholder="(150 characters only)" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="approval-container">
                    <h3>Approval Details</h3>
                    <div class="main">
                        <div class="left-side-approve section">
                             <!-- APPROVED BY FIELD -->
                             <div class="fields">
                                <label class="dis-input" for="shift-approvedBy">Approved By <span> *</span></label>
                                <input class="dis-input" type="text" name="shift_approvedBy" id="shift-approvedBy" required>
                            </div>
                        </div>

                        <div class="right-side-approve section">
                            <!-- NOTED BY FIELD -->
                            <div class="fields">
                                <label class="dis-input" for="shift-noteBy">Noted By <span> *</span></label>
                                <input class="dis-input" type="text" name="shift_noteBy" id="shift-noteBy" required>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>