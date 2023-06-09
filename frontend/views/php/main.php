<?php
    //--- STARTS SESSION ---//
    session_start();

    //--- REQUIRES USER TO LOGIN IN ORDER TO PROCEED ---//
    if(!isset($_SESSION['user-id'])){
        header("Location: ../../../frontend/views/php/login.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../../public/css/main.css">
    <!-- WEB ICON -->
    <link rel="icon" href="../../public/assets/comfac-logo-transparent.png">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/aa37050208.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "../../../backend/includes/popup_handlers_inc.php"?>

    <!-- PAGE HEADER -->
    <div class="head-container">
        <img class="main-logo" src="../../public/assets/comfac-logo.png" alt="comfac global group logo">
        <div class="profile-container">
            <p><strong><abbr title="<?php echo $_SESSION['user-name']?>"><?php echo $_SESSION['user-name']?></abbr></strong></p>
            <i class="fa-solid fa-user"></i>
        </div>
    </div>

    <!-- SIDE NAVBAR -->
    <div class="side-nav">
        <ul>
            <a href="#" ><li id="dash-btn"><i class="nav-icons fa-solid fa-house"></i>Dashboard</li></a>
            <a href="#"><li id="overtime-btn"><i class="nav-icons fa-solid fa-clock"></i>Overtime</li></a>
            <a href="#" ><li id="shifts-btn"><i class="nav-icons fa-regular fa-calendar"></i>Change Shifts</li></a>
            <a href="#" ><li id="offBusiness-btn"><i class="nav-icons fa-solid fa-briefcase"></i>Official Business</li></a>
            <a href="../../../backend/includes/logout_inc.php" ><li id="logout-btn"><i class="nav-icons fa-solid fa-arrow-right-from-bracket"></i>Logout</li></a>
        </ul>
    </div>

    <!-- DASHBOARD CONTENT -->
     <div class="dash-container" id="dash-container">
        <div class="content-header">
        </div>
        <div class="content-container">
        </div>
    </div>

    <!-- OVERTIME CONTENT -->
    <div class="overtime-container" id="overtime-container">
        <div class="content-header">
            <input type="text" class="overtime-search" id="overtime-search" placeholder="Type here to search">
            <button class="addOvertime-btn" id="addOvertime-btn"><i class="fa-solid fa-plus"></i> Add Overtime</button>
        </div>
        <div class="content-container">
            <table>
                <tr>
                    <th class="name">Name</th>
                    <th class="company">Company*</th>
                    <th>Department*</th>
                    <th>Position*</th>
                    <th>Time from</th>
                    <th>Time to</th>
                    <th class="thours">Total hours</th>
                    <th>Date Created</th>
                    <th class="actions">Action</th>
                </tr>

                <tbody id="overtime-table-body">

                    <?php
                        ob_start();

                        include_once '../../../backend/includes/dbconn_inc.php';

                        if(isset($_GET['deleteovertime'])){
                            $overtimeid = $_GET['deleteovertime'];
                            
                            $delsql = "DELETE FROM overtime_csc WHERE ot_id = ?;";
                            $delstmt = mysqli_stmt_init($conn);

                            if(!mysqli_stmt_prepare($delstmt, $delsql)){
                                echo 'deletion failed';
                            }
                            else{
                                mysqli_stmt_bind_param($delstmt, 'i', $overtimeid);
                                mysqli_stmt_execute($delstmt);

                                if(mysqli_stmt_affected_rows($delstmt) > 0){
                                    header('Location: main.php?deletion=successful');
                                }
                                else{
                                    header('Location: main.php?deletion=failed');
                                }
                            }

                            mysqli_stmt_close($delstmt);
                        }

                        $sql = "SELECT * FROM overtime_csc ORDER BY ot_datecreate DESC;";
                        $stmt = mysqli_stmt_init($conn);

                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            echo 'SQL statement failed';
                        }
                        else{
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while($row = mysqli_fetch_assoc($result)){
                                
                                $overtimeid = $row['ot_id'];
                                $company = $row['ot_company'];
                                $department = $row['ot_dept'];
                                $firstname = $row['ot_firstname'];
                                $lastname = $row['ot_lastname'];
                                $position = $row['ot_position'];
                                $timefrom = $row['ot_from'];
                                $timeto = $row['ot_to'];
                                $overtime = $row['ot_hours'];

                                $filedate = $row['ot_datecreate'];

                                $date = date('m/d/Y', strtotime($filedate));

                                echo ' 
                                <tr>
                                    <td class="name"><abbr title="' . $firstname . ' ' . $lastname . '">' . $firstname . ' ' . $lastname . '</abbr></td>
                                    <td class="company"><abbr title="' . $company . '">' . $company . '</abbr></td>
                                    <td><abbr title="' . $department . '"> ' . $department . '</abbr></td>
                                    <td><abbr title="' . $position . '">' . $position . '</abbr></td>
                                    <td> ' . $timefrom .  '</td>
                                    <td> ' . $timeto . '</td>
                                    <td class="thours">' . $overtime . '</td>
                                    <td> ' . $date . '</td>     
                                    <td class="actions">
                                        <a href="?deleteovertime=' . $overtimeid . '"><i class="act-icon fa-solid fa-trash-can"></i></a>
                                        <a href="../../views/php/overtime.php?id=' . $overtimeid . '"><i class="act-icon fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                </tr>';
                            }
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- CHANGE SHIFT CONTENT -->
    <div class="shifts-container" id="shifts-container">
        <div class="content-header">
            <input type="text" class="shifts-search" id="shifts-search" placeholder="Type here to search">
            <button class="addShifts-btn" id="addShifts-btn"><i class="fa-solid fa-plus"></i> Change Shift</button>
        </div>
        <div class="content-container">
            <table>
                <tr>
                    <th class="name">Name</th>
                    <th>Company</th>
                    <th>Department</th>
                    <th>Orig Time</th>
                    <th>New Time</th>
                    <th>Approved By</th>
                    <th>Date Effective</th>
                    <th class="actions">Action</th>
                </tr>

                <tbody id="shift-table-body">

                <?php 
                    include_once '../../../backend/includes/dbconn_inc.php';         

                    if(isset($_GET['deleteshift'])){
                        $shiftid = $_GET['deleteshift'];
                        
                        $delsql = "DELETE FROM changeshift_csc WHERE cs_id = ?;";
                        $delstmt = mysqli_stmt_init($conn);

                        if(!mysqli_stmt_prepare($delstmt, $delsql)){
                            echo 'deletion failed';
                        }
                        else{
                            mysqli_stmt_bind_param($delstmt, 'i', $shiftid);
                            mysqli_stmt_execute($delstmt);

                            if(mysqli_stmt_affected_rows($delstmt) > 0){
                                header('Location: main.php?deletion=successful');
                            }
                            else{
                                header('Location: main.php?deletion=failed');
                            }
                        }

                        mysqli_stmt_close($delstmt);
                    }

                    $sql = "SELECT * FROM changeshift_csc ORDER BY cs_datecreate DESC;";
                    $stmt = mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        echo 'SQL statement failed';
                    }
                    else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while($row = mysqli_fetch_assoc($result)){
                            $shiftid = $row['cs_id'];
                            $firstname = $row['cs_firstname'];
                            $lastname = $row['cs_lastname'];
                            $company = $row['cs_company'];
                            $department = $row['cs_dept'];
                            $origin = $row['cs_shiftorigin'];
                            $new = $row['cs_shiftnew'];
                            $approved = $row['cs_approved'];
                            $date = $row['cs_date'];

                            $effectiveDate = date('m/d/Y', strtotime($date));

                            echo '
                            <tr>
                                <td class="name"><abbr title="' . $firstname . ' ' . $lastname . '">' . $firstname . ' ' . $lastname . '</abbr></td>
                                <td class="company"><abbr title="' . $company . '">' . $company . '</abbr></td>
                                <td><abbr title="' . $department . '">' . $department . '</abbr></td>
                                <td> ' . $origin . '</td>
                                <td> ' . $new .  '</td>
                                <td><abbr title="' . $approved . '">' . $approved . '</abbr></td>
                                <td> ' . $effectiveDate . '</td>     
                                <td class="actions">
                                    <a href="?deleteshift=' . $shiftid . '"><i class="act-icon fa-solid fa-trash-can"></i></a>
                                    <a href="../../views/php/changeshift.php?id=' . $shiftid . '"><i class="act-icon fa-solid fa-pen-to-square"></i></a>
                                </td>
                            </tr>';
                        }
                    }
                ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- OFFICIAL BUSINESS CONTENT -->
    <div class="offBusiness-container" id="offBusiness-container">
        <div class="content-header">
            <input type="text" class="offBusiness-search" id="offBusiness-search" placeholder="Type here to search">
            <button class="addOffBusiness-btn" id="addOffBusiness-btn"><i class="fa-solid fa-plus"></i>Official Business</button>
        </div>
        <div class="content-container">
            <table>
                <tr>
                    <th class="name">Name</th>
                    <th>Company</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Authorize Client</th>
                    <th>Noted By</th>
                    <th>Date</th>
                    <th class="actions">Action</th>
                </tr>

                <tbody id="offBusiness-table-body">

                    
                <?php 
                    include_once '../../../backend/includes/dbconn_inc.php';         

                    if(isset($_GET['deleteoffbusiness'])){
                        $offbusinessid = $_GET['deleteoffbusiness'];
                        
                        $delsql = "DELETE FROM officialbusiness_csc WHERE ob_id = ?;";
                        $delstmt = mysqli_stmt_init($conn);

                        if(!mysqli_stmt_prepare($delstmt, $delsql)){
                            echo 'deletion failed';
                        }
                        else{
                            mysqli_stmt_bind_param($delstmt, 'i', $offbusinessid);
                            mysqli_stmt_execute($delstmt);

                            if(mysqli_stmt_affected_rows($delstmt) > 0){
                                header('Location: main.php?deletion=successful');
                            }
                            else{
                                header('Location: main.php?deletion=failed');
                            }
                        }

                        mysqli_stmt_close($delstmt);
                    }

                    $sql = "SELECT * FROM officialbusiness_csc ORDER BY ob_datecreate DESC;";
                    $stmt = mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        echo 'SQL statement failed';
                    }
                    else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while($row = mysqli_fetch_assoc($result)){
                            $offbusinessid = $row['ob_id'];
                            $firstname = $row['ob_firstname'];
                            $lastname = $row['ob_lastname'];
                            $company = $row['ob_company'];
                            $department = $row['ob_dept'];
                            $status = $row['ob_status'];
                            $client = $row['ob_client'];
                            $noted = $row['ob_noted'];
                            $date = $row['ob_date'];

                            $effectiveDate = date('m/d/Y', strtotime($date));

                            echo '
                            <tr>
                                <td class="name"><abbr title="' . $firstname . ' ' . $lastname . '">' . $firstname . ' ' . $lastname . '</abbr></td>
                                <td class="company"><abbr title="' . $company . '">' . $company . '</abbr></td>
                                <td><abbr title="' . $department . '">' . $department . '</abbr></td>
                                <td> ' . $status . '</td>
                                <td> ' . $client .  '</td>
                                <td> ' . $noted . '</td>
                                <td> ' . $effectiveDate . '</td>     
                                <td class="actions">
                                    <a href="?deleteoffbusiness=' . $offbusinessid . '"><i class="act-icon fa-solid fa-trash-can"></i></a>
                                    <a href="../../views/php/officialBusiness.php?id=' . $offbusinessid . '"><i class="act-icon fa-solid fa-pen-to-square"></i></a>
                                </td>
                            </tr>';
                        }
                    }
                ?>
    
                </tbody>
            </table>
        </div>
    </div>

    <!-- FORM MODALS -->
    <!-- ADD OVERTIME MODAL -->
    <div class="bg" id="bg"></div>
    <div class="overtime-modal-container" id="overtime-modal-container">
        <div class="modal-header">
            <h4>ADD OVERTIME</h4>
        </div>
        <form action="../../../backend/includes/overtime_inc.php" method="post" id="overtime-form">

            <!-- LEFT SIDE MODAL -->
            <div class="form-left">
                <!-- COMPANY FIELD -->
                <div class="fields">
                    <label for="ot-company">Company <span> *</span></label>
                    <select name="ot_company" id="ot-company" required autofocus>
                        <option value="" selected disabled>Select company</option>
                        <option value="Comfac">Comfac Corporation</option>
                        <option value="CSC">Cornersteel Systems Corporation</option>
                        <option value="ESCO">ESCO</option>
                    </select>
                </div>

                <!-- DEPARTMENT FIELD -->
                <div class="fields">
                    <label for="ot-department">Department <span> *</span></label>
                    <select name="ot_department" id="ot-department" required>
                        <option value="" selected disabled>Select company</option>
                        <option value="Accounts">Accounts</option>
                        <option value="Sales">Sales</option>
                        <option value="Legal">Legal</option>
                        <option value="PID">Project Installation Dep</option>
                        <option value="HR">Human Resources</option>
                    </select>
                </div>

                <!-- NAME FIELDS -->
                <div class="field-container">
                    <div class="fields">
                        <label for="ot-firstname">Firstname <span> *</span></label>
                        <input type="text" maxlength="25" pattern="[A-Za-z ]{2,25}" name="ot_firstname" id="ot-firstname" placeholder="Juan" required>
                    </div>
    
                    <div class="fields">
                        <label for="ot-midname">Middlename</label>
                        <input type="text" maxlength="15" pattern="[A-Za-z]{2,15}" name="ot_midname" id="ot-midname" placeholder="Reyes">
                    </div>
                </div>

                <!-- LASTNAME FIELD -->
                <div class="fields">
                    <label for="ot-lastname">Lastname <span> *</span></label>
                    <input type="text" maxlength="15" pattern="[A-Za-z]{2,15}" name="ot_lastname" id="ot-lastname" placeholder="Dela Cruz" required>
                </div>

                <!-- POSITION FIELD -->
                <div class="fields">
                    <label for="ot-position">Position <span> *</span></label>
                    <input type="text" name="ot_position" id="ot-position" placeholder="Employee Position" required>
                </div> 

                <!-- TIME FIELDS -->
                <div class="time-container">
                    <div class="fields">
                        <label for="ot-timeFrom">Time (from) <span> *</span></label>
                        <input type="time" name="ot_timeFrom" id="ot-timeFrom" required>
                    </div>
    
                    <div class="fields">
                        <label for="ot-timeTo">Time (to) <span> *</span></label>
                        <input type="time" name="ot_timeTo" id="ot-timeTo" required>
                    </div>
                </div>

                 <!-- MODAL BUTTON CONTAINER -->
                <div class="modal-btn-container">
                    <input type="button" value="Cancel" class="otCancelBtn modal-btn" id="otCancel-btn">
                    <button class="save-btn modal-btn" id="save-btn" type="submit" name="overtime-save">Save</button>
                </div>
            </div>

            <!-- RIGHT SIDE MODAL -->
            <div class="form-right">

                <!-- TASK FIELD -->
                <div class="fields">
                    <label for="ot-task">Work to Perform/ Task</label>
                    <textarea name="ot_task" id="ot-task" cols="30" rows="9" maxlength="150"></textarea>
                </div>

                <!-- DESIGNATION FIELD -->
                <div class="fields">
                    <label for="ot-designation">Designation <span> *</span></label>
                    <select name="ot_designation" id="ot-designation" required>
                        <option value="" selected disabled>Select Designation</option>
                        <option value="Administrative Officer">Administrative Officer</option>
                        <option value="Accountant">Accountant</option>
                        <option value="HR Manager">HR Manager</option>
                        <option value="Software Developer">Software Developer</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Secretary">Secretary</option>
                    </select>
                </div>

                <!-- APPROVED BY FIELD -->
                <div class="fields">
                    <label for="ot-approvedBy">Approved By <span> *</span></label>
                    <input type="text" name="ot_approvedBy" id="ot-approvedBy" required>
                </div>

                <!-- NOTED BY FIELD -->
                <div class="fields">
                    <label for="ot-noteBy">Noted By <span> *</span></label>
                    <input type="text" name="ot_noteBy" id="ot-noteBy" required>
                </div>
            </div>
        </form>
    </div>

    <!-- ADD CHANGE SHIFT MODAL -->
    <div class="bg" id="bg"></div>
    <div class="shift-modal-container" id="shift-modal-container">
        <div class="modal-header">
            <h4>ADD CHANGE SHIFT</h4>
        </div>
        <form action="../../../backend/includes/changeshift_inc.php" method="post" id="shift-form">

            <!-- LEFT SIDE MODAL -->
            <div class="form-left">
                <!-- COMPANY FIELD -->
                <div class="fields">
                    <label for="shift-company">Company <span> *</span></label>
                    <select name="shift_company" id="shift-company" required autofocus>
                        <option value="" selected disabled>Select company</option>
                        <option value="Comfac">Comfac Corporation</option>
                        <option value="CSC">Cornersteel Systems Corporation</option>
                        <option value="ESCO">ESCO</option>
                    </select>
                </div>

                <!-- DEPARTMENT FIELD -->
                <div class="fields">
                    <label for="shift-department">Department <span> *</span></label>
                    <select name="shift_department" id="shift-department" required>
                        <option value="" selected disabled>Select company</option>
                        <option value="Accounts">Accounts</option>
                        <option value="Sales">Sales</option>
                        <option value="Legal">Legal</option>
                        <option value="PID">Project Installation Dep</option>
                        <option value="HR">Human Resources</option>
                    </select>
                </div>

                <!-- NAME FIELDS -->
                <div class="field-container">
                    <div class="fields">
                        <label for="shift-firstname">Firstname <span> *</span></label>
                        <input type="text" name="shift_firstname" id="shift-firstname" placeholder="Juan" required>
                    </div>
    
                    <div class="fields">
                        <label for="shift-midname">Middlename</label>
                        <input type="text" name="shift_midname" id="shift-midname" placeholder="Reyes">
                    </div>
                </div>
                
                <div class="field-container">
                    <!-- LASTNAME FIELD -->
                    <div class="fields">
                        <label for="shift-lastname">Lastname <span> *</span></label>
                        <input type="text" name="shift_lastname" id="shift-lastname" placeholder="Dela Cruz" required>
                    </div>
                    
                    <!-- DATE EFFECTIVE -->
                    <div class="fields">
                        <label for="shift-date">Date Effective <span> *</span></label>
                        <input type="date" id="shift-date" name="shift_date" required>
                    </div>
                </div>
               
                <!-- ORIGINAL SHIFT FIELD -->
                <div class="fields">
                    <label for="shift-orig"> Original shift<span> *</span></label>
                    <select name="shift_orig" id="shift-orig" required>
                        <option value="" selected disabled>Select shift</option>
                        <option value="8:00AM - 5:00PM">Shift type 1: 8:00AM - 5:00PM</option>
                        <option value="9:00AM - 7:00PM">Shift type 2: 9:00AM - 7:00PM</option>
                        <option value="6:00AM - 3:00PM">Shift type 3: 6:00AM - 3:00PM</option>
                    </select>
                </div> 

                 <!-- MODAL BUTTON CONTAINER -->
                <div class="modal-btn-container">
                    <input type="button" value="Cancel" class="shiftCancelBtn modal-btn" id="shiftCancel-btn">
                    <button class="save-btn modal-btn" id="save-btn" type="submit" name="shift-save">Save</button>
                </div>
            </div>

            <!-- RIGHT SIDE MODAL -->
            <div class="form-right">


                <!-- NEW SHIFT FIELD -->
                <div class="fields">
                    <label for="shift-new"> New shift<span> *</span></label>
                    <select name="shift_new" id="shift-new" required>
                        <option value="" selected disabled>Select shift</option>
                        <option value="8:00AM - 5:00PM">Shift type 1: 8:00AM - 5:00PM</option>
                        <option value="9:00AM - 7:00PM">Shift type 2: 9:00AM - 7:00PM</option>
                        <option value="6:00AM - 3:00PM">Shift type 3: 6:00AM - 3:00PM</option>
                    </select>
                </div>

                <!-- REASON FIELD -->
                <div class="fields">
                    <label for="shift-reason">Reason<span> *</span></label>
                    <textarea name="shift_reason" id="shift-reason" cols="30" rows="9" maxlength="150" placeholder="(150 characters only)" required></textarea>
                </div>

                <!-- APPROVED BY FIELD -->
                <div class="fields">
                    <label for="shift-approvedBy">Approved By <span> *</span></label>
                    <input type="text" name="shift_approvedBy" id="shift-approvedBy" required>
                </div>

                <!-- NOTED BY FIELD -->
                <div class="fields">
                    <label for="shift-noteBy">Noted By <span> *</span></label>
                    <input type="text" name="shift_noteBy" id="shift-noteBy" required>
                </div>
            </div>
        </form>
    </div>


    <!-- ADD OFFICIAL BUSINESS MODAL -->
    <div class="bg" id="bg"></div>
    <div class="offBusiness-modal-container" id="offBusiness-modal-container">
        <div class="modal-header">
            <h4>ADD OFFICIAL BUSINESS</h4>
        </div>
        <form action="../../../backend/includes/offbusiness_inc.php" method="post" id="offBusiness-form">

            <!-- LEFT SIDE MODAL -->
            <div class="form-left">
                <!-- COMPANY FIELD -->
                <div class="fields">
                    <label for="ob-company">Company <span> *</span></label>
                    <select name="ob_company" id="ob-company" required autofocus>
                        <option value="" selected disabled>Select company</option>
                        <option value="Comfac">Comfac Corporation</option>
                        <option value="CSC">Cornersteel Systems Corporation</option>
                        <option value="ESCO">ESCO</option>
                    </select>
                </div>

                <!-- DEPARTMENT FIELD -->
                <div class="fields">
                    <label for="ob-department">Department <span> *</span></label>
                    <select name="ob_department" id="ob-department" required>
                        <option value="" selected disabled>Select company</option>
                        <option value="Accounting">Accounts</option>
                        <option value="Sales">Sales</option>
                        <option value="Legal">Legal</option>
                        <option value="PID">Project Installation Dep</option>
                        <option value="HR">Human Resources</option>
                    </select>
                </div>

                <!-- NAME FIELDS -->
                <div class="field-container">
                    <div class="fields">
                        <label for="ob-firstname">Firstname <span> *</span></label>
                        <input type="text" name="ob_firstname" id="ob-firstname" placeholder="Juan" required>
                    </div>
    
                    <div class="fields">
                        <label for="ob-midname">Middlename</label>
                        <input type="text" name="ob_midname" id="ob-midname" placeholder="Reyes">
                    </div>
                </div>

                <!-- LASTNAME FIELD -->
                <div class="fields">
                    <label for="ob-lastname">Lastname <span> *</span></label>
                    <input type="text" name="ob_lastname" id="ob-lastname" placeholder="Dela Cruz" required>
                </div>

                <!-- AUTHORIZE CLIENT FIELD -->
                <div class="fields">
                    <label for="ob-client">Authorize Client <span> *</span></label>
                    <input type="text" name="ob_client" id="ob-client" required>
                </div>


                 <!-- MODAL BUTTON CONTAINER -->
                <div class="modal-btn-container">
                    <input type="button" value="Cancel" class="offBusCancelBtn modal-btn" id="offBusCancel-btn">
                    <button class="save-btn modal-btn" id="save-btn" type="submit" name="offbusiness-save">Save</button>
                </div>
            </div>

            <!-- RIGHT SIDE MODAL -->
            <div class="form-right">
                
                <div class="field-container">
                    <!-- STATUS FIELD -->
                    <div class="fields">
                        <label for="ob-status">Status <span> *</span></label>
                        <select name="ob_status" id="ob-status" required>
                            <option value="" selected disabled>Select status</option>
                            <option value="No Login">No Login</option>
                            <option value="No Logout">No Logout</option>
                            <option value="Both">Both</option>
                        </select>
                    </div>
                    <!-- DATE FIELD -->
                    <div class="fields">
                        <label for="ob-date">Date <span> *</span></label>
                        <input type="date" name="ob_date" id="ob-date" required>
                    </div>
                </div>
                 
                <!-- REASON FIELD -->
                <div class="fields">
                    <label for="ob-reason">Reason<span> *</span></label>
                    <textarea name="ob_reason" id="ob-reason" cols="30" rows="9" maxlength="150"></textarea>
                </div>

                <!-- NOTED BY FIELD -->
                <div class="fields">

                    <label for="ob-noteBy">Noted By <span> *</span></label>
                    <input type="text" name="ob_noteBy" id="ob-noteBy" required>

                </div>
            </div>
        </form>
    </div>
    
    <!-- JAVASCRIPT -->
    <script src="../../js/main.js"></script>
</body>
</html>

<?php
    ob_end_flush();
?>