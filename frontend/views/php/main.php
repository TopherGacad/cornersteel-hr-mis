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
     <!-- PAGE HEADER -->
     <div class="head-container">
        <img class="main-logo" src="../../public/assets/comfac-logo.png" alt="comfac global group logo">
        <i class="nav-icons fa-solid fa-arrow-right-from-bracket"></i>
    </div>

    <!-- SIDE NAVBAR -->
    <div class="side-nav">
        <ul>
            <a href="#" ><li id="dash-btn"><i class="nav-icons fa-solid fa-house"></i>Dashboard</li></a>
            <a href="#" ><li id="overtime-btn"><i class="nav-icons fa-solid fa-clock"></i>Overtime</li></a>
            <a href="#" ><li id="shifts-btn"><i class="nav-icons fa-regular fa-calendar"></i> Shifts</li></a>
            <a href="#" ><li id="offBusiness-btn"><i class="nav-icons fa-solid fa-briefcase"></i>Official Business</li></a>
            <a href="../../views/php/login.php" ><li id="logout-btn"><i class="nav-icons fa-solid fa-arrow-right-from-bracket"></i>Logout</li></a>
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
                    <th>Name</th>
                    <th>Company</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Time from</th>
                    <th>Time to</th>
                    <th class="thours">Total hours</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>

                <tbody id="overtime-table-body">
                    <tr>
                        <td>Sean Gomez</td>
                        <td>Cornersteel</td>
                        <td>Human Resources - CF</td>
                        <td>Worker</td>
                        <td>6:00 pm</td>
                        <td>8:00 pm</td>
                        <td class="thours">3434</td>
                        <td>16-05-2023</td>
                        <td>
                            <i class="act-icon fa-solid fa-trash-can"></i>
                            <i class="act-icon fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>Jonathan Peol</td>
                        <td>Comfac</td>
                        <td>Accounts - CF</td>
                        <td>Worker</td>
                        <td>6:00 pm</td>
                        <td>8:00 pm</td>
                        <td class="thours">3434</td>
                        <td>16-05-2023</td>
                        <td>
                            <i class="act-icon fa-solid fa-trash-can"></i>
                            <i class="act-icon fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>Adriel Orio</td>
                        <td>ESCO</td>
                        <td>IT - Specialist</td>
                        <td>Plant Director</td>
                        <td>6:00 pm</td>
                        <td>8:00 pm</td>
                        <td class="thours">3434</td>
                        <td>16-05-2023</td>
                        <td>
                            <i class="act-icon fa-solid fa-trash-can"></i>
                            <i class="act-icon fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
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
                    <th>Name</th>
                    <th>Company</th>
                    <th>Department</th>
                    <th>Orig Time</th>
                    <th>New Time</th>
                    <th>Approve By</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>

                <tbody id="shift-table-body">
                    <tr>
                        <td>Sean Gomez</td>
                        <td>Cornersteel</td>
                        <td>Human Resources - CF</td>
                        <td>6:00 am - 5:00pm</td>
                        <td>9:00 am - 6:00pm</td>
                        <td>Jonathan Peol</td>
                        <td>05-17-2023</td>
                        <td>
                            <i class="act-icon fa-solid fa-trash-can"></i>
                            <i class="act-icon fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>Jonathan Peol</td>
                        <td>Comfac</td>
                        <td>IT Department</td>
                        <td>6:00 am - 5:00pm</td>
                        <td>9:00 am - 6:00pm</td>
                        <td>Adriel Orio</td>
                        <td>05-17-2023</td>
                        <td>
                            <i class="act-icon fa-solid fa-trash-can"></i>
                            <i class="act-icon fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>Sean Gomez</td>
                        <td>ESCO</td>
                        <td>Human Resources - CF</td>
                        <td>6:00 am - 5:00pm</td>
                        <td>9:00 am - 6:00pm</td>
                        <td>Jonathan Peol</td>
                        <td>05-17-2023</td>
                        <td>
                            <i class="act-icon fa-solid fa-trash-can"></i>
                            <i class="act-icon fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
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
                    <th>Name</th>
                    <th>Company</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Authorize Client</th>
                    <th>Approved By</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>

                <tbody id="offBusiness-table-body">
                    <tr>
                        <td>Sean Gomez</td>
                        <td>Cornersteel</td>
                        <td>Human Resources - Makati City CF</td>
                        <td>No Logout</td>
                        <td>Jonathan Peol</td>
                        <td>Christopher Gacad</td>
                        <td>16-05-2023</td>
                        <td>
                            <i class="act-icon fa-solid fa-trash-can"></i>
                            <i class="act-icon fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>Jonathan Peol</td>
                        <td>Comfac</td>
                        <td>Accounts - CF</td>
                        <td>No Logout</td>
                        <td>Rein Simacon</td>
                        <td>Christopher Gacad</td>
                        <td>16-05-2023</td>
                        <td>
                            <i class="act-icon fa-solid fa-trash-can"></i>
                            <i class="act-icon fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>Adriel Orio</td>
                        <td>ESCO</td>
                        <td>Human Resources</td>
                        <td>Both</td>
                        <td>Jonathan Peol</td>
                        <td>Peach Corcelles</td>
                        <td>16-05-2023</td>
                        <td>
                            <i class="act-icon fa-solid fa-trash-can"></i>
                            <i class="act-icon fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
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
        <form action="" id="overtime-form">

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
                        <option value="PID">Project Installation Dep</option>
                        <option value="HR">Human Resources</option>
                    </select>
                </div>

                <!-- NAME FIELDS -->
                <div class="name-container">
                    <div class="fields">
                        <label for="ot-firstname">Firstname <span> *</span></label>
                        <input type="text" name="ot_firstname" id="ot-firstname" placeholder="Juan" required>
                    </div>
    
                    <div class="fields">
                        <label for="ot-midname">Middlename</label>
                        <input type="text" name="ot_midname" id="ot-midname" placeholder="Reyes">
                    </div>
                </div>

                <!-- LASTNAME FIELD -->
                <div class="fields">
                    <label for="ot-lastname">Lastname <span> *</span></label>
                    <input type="text" name="ot_lastname" id="ot-lastname" placeholder="Dela Cruz" required>
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
                    <button class="save-btn modal-btn" id="save-btn" type="submit">Save</button>
                </div>
            </div>

            <!-- RIGHT SIDE MODAL -->
            <div class="form-right">

                <!-- TASK FIELD -->
                <div class="fields">
                    <label for="ot-task">Work to Perform/ Task</label>
                    <textarea name="ot_task" id="ot-task" cols="30" rows="9" maxlength="150"></textarea>
                </div>

                <!-- REQUESTED BY FIELD -->
                <div class="fields">
                    <label for="ot-requestedBy">Requested By <span> *</span></label>
                    <input type="text" name="ot_requestedBy" id="ot-requestedBy" required> 
                </div>

                <!-- DESIGNATION FIELD -->
                <div class="fields">
                    <label for="ot-designation">Designation</label>
                    <input type="text" name="ot_designation" id="ot-designation">
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
        <form action="" id="shift-form">

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
                        <option value="PID">Project Installation Dep</option>
                        <option value="HR">Human Resources</option>
                    </select>
                </div>

                <!-- NAME FIELDS -->
                <div class="name-container">
                    <div class="fields">
                        <label for="shift-firstname">Firstname <span> *</span></label>
                        <input type="text" name="shift_firstname" id="shift-firstname" placeholder="Juan" required>
                    </div>
    
                    <div class="fields">
                        <label for="shift-midname">Middlename</label>
                        <input type="text" name="shift_midname" id="shift-midname" placeholder="Reyes">
                    </div>
                </div>

                <!-- LASTNAME FIELD -->
                <div class="fields">
                    <label for="shift-lastname">Lastname <span> *</span></label>
                    <input type="text" name="shift_lastname" id="shift-lastname" placeholder="Dela Cruz" required>
                </div>

                <!-- ORIGINAL SHIFT FIELD -->
                <div class="fields">
                    <label for="shift-orig"> Original shift<span> *</span></label>
                    <select name="shift_orig" id="shift-orig" required>
                        <option value="" selected disabled>Select shift</option>
                        <option value="type 1">Shift type 1: 8:00AM - 5:00PM</option>
                        <option value="type 2">Shift type 2: 9:00AM - 7:00PM</option>
                        <option value="type 3">Shift type 3: 6:00AM - 3:00PM</option>
                    </select>
                </div> 

                 <!-- MODAL BUTTON CONTAINER -->
                <div class="modal-btn-container">
                    <input type="button" value="Cancel" class="shiftCancelBtn modal-btn" id="shiftCancel-btn">
                    <button class="save-btn modal-btn" id="save-btn" type="submit">Save</button>
                </div>
            </div>

            <!-- RIGHT SIDE MODAL -->
            <div class="form-right">


                <!-- NEW SHIFT FIELD -->
                <div class="fields">
                    <label for="shift-new"> New shift<span> *</span></label>
                    <select name="shift_new" id="shift-new" required>
                        <option value="" selected disabled>Select shift</option>
                        <option value="type 1">Shift type 1: 8:00AM - 5:00PM</option>
                        <option value="type 2">Shift type 2: 9:00AM - 7:00PM</option>
                        <option value="type 3">Shift type 3: 6:00AM - 3:00PM</option>
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
        <form action="" id="offBusiness-form">

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
                        <option value="Accounts">Accounts</option>
                        <option value="PID">Project Installation Dep</option>
                        <option value="HR">Human Resources</option>
                    </select>
                </div>

                <!-- NAME FIELDS -->
                <div class="name-container">
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
                    <button class="save-btn modal-btn" id="save-btn" type="submit">Save</button>
                </div>
            </div>

            <!-- RIGHT SIDE MODAL -->
            <div class="form-right">

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

                <!-- REASON FIELD -->
                <div class="fields">
                    <label for="ob-reason">Reason<span> *</span></label>
                    <textarea name="ob_reason" id="ob-reason" cols="30" rows="9" maxlength="150"></textarea>
                </div>

                <!-- NOTED BY FIELD -->
                <div class="fields">
                    <label for="ot-noteBy">Noted By <span> *</span></label>
                    <input type="text" name="ot_noteBy" id="ot-noteBy" required>
                </div>
            </div>
        </form>
    </div>

    <!-- EDIT OVERTIME MODAL -->
    <div class="bg" id="bg"></div>
    <div class="otEdit-modal-container" id="otEdit-modal-container">
        <div class="modal-header">
            <h4>ADD OVERTIME</h4>
        </div>
        <form action="" id="otEdit-form">

            <!-- LEFT SIDE MODAL -->
            <div class="form-left">
                <!-- COMPANY FIELD -->
                <div class="fields">
                    <label class="dis-input" for="ot-company">Company <span> *</span></label>
                    <select class="dis-input" name="ot_company" id="ot-company" required autofocus>
                        <option value=""disabled>Select company</option>
                        <option value="Comfac">Comfac Corporation</option>
                        <option value="CSC" selected>Cornersteel Systems Corporation</option>
                        <option value="ESCO">ESCO</option>
                    </select>
                </div>

                <!-- DEPARTMENT FIELD -->
                <div class="fields">
                    <label class="dis-input" for="ot-department">Department <span> *</span></label>
                    <select class="dis-input" name="ot_department" id="ot-department" required>
                        <option value="" disabled>Select company</option>
                        <option value="Accounts">Accounts</option>
                        <option value="PID" selected>Project Installation Dep</option>
                        <option value="HR">Human Resources</option>
                    </select>
                </div>

                <!-- NAME FIELDS -->
                <div class="name-container">
                    <div class="fields">
                        <label class="dis-input" for="ot-firstname">Firstname <span> *</span></label>
                        <input class="dis-input" type="text" name="ot_firstname" id="ot-firstname" required value="Sean">
                    </div>
    
                    <div class="fields">
                        <label class="dis-input" for="ot-midname">Middlename</label>
                        <input class="dis-input" type="text" name="ot_midname" id="ot-midname" value="Peol">
                    </div>
                </div>

                <!-- LASTNAME FIELD -->
                <div class="fields">
                    <label class="dis-input" for="ot-lastname">Lastname <span> *</span></label>
                    <input class="dis-input" type="text" name="ot_lastname" id="ot-lastname" value="Gomez" required>
                </div>

                <!-- POSITION FIELD -->
                <div class="fields">
                    <label class="dis-input" for="ot-position">Position <span> *</span></label>
                    <input class="dis-input" type="text" name="ot_position" id="ot-position" value="IT-Specialist" required>
                </div> 

                <!-- TIME FIELDS -->
                <div class="time-container">
                    <div class="fields">
                        <label class="dis-input" for="ot-timeFrom">Time (from) <span> *</span></label>
                        <input class="dis-input" type="time" name="ot_timeFrom" id="ot-timeFrom" value="07:00" required>
                    </div>
    
                    <div class="fields">
                        <label class="dis-input" for="ot-timeTo">Time (to) <span> *</span></label>
                        <input class="dis-input" type="time" name="ot_timeTo" id="ot-timeTo" value="17:00" required>
                    </div>
                </div>

                 <!-- MODAL BUTTON CONTAINER -->
                <div class="modal-btn-container">
                    <input type="button" value="Cancel" class="cancelBtn modal-btn" id="cancel-btn">
                    <button class="edit-btn modal-btn" id="otEdit-btn" type="button">Edit</button>
                    <button class="update-btn modal-btn" id="update-btn" type="submit">Update</button>
                </div>
            </div>

            <!-- RIGHT SIDE MODAL -->
            <div class="form-right">

                <!-- TASK FIELD -->
                <div class="fields">
                    <label class="dis-input" for="ot-task">Work to Perform/ Task</label>
                    <textarea class="dis-input" name="ot-task" id="ot_task" cols="30" rows="9" maxlength="150"></textarea>
                </div>

                <!-- REQUESTED BY FIELD -->
                <div class="fields">
                    <label class="dis-input" for="ot-requestedBy">Requested By <span> *</span></label>
                    <input class="dis-input" type="text" name="ot_requestedBy" id="ot-requestedBy" value="Jonathan Peol" required> 
                </div>

                <!-- DESIGNATION FIELD -->
                <div class="fields">
                    <label class="dis-input" for="ot-designation">Designation</label>
                    <input class="dis-input" type="text" name="ot_designation" id="ot-designation" value="Department Head">
                </div>

                <!-- APPROVED BY FIELD -->
                <div class="fields">
                    <label class="dis-input" for="ot-approvedBy">Approved By <span> *</span></label>
                    <input class="dis-input" type="text" name="ot_approvedBy" id="ot-approvedBy" value="Adriel Orio" required>
                </div>

                <!-- NOTED BY FIELD -->
                <div class="fields">
                    <label class="dis-input" for="ot-noteBy">Noted By <span> *</span></label>
                    <input class="dis-input" type="text" name="ot_noteBy" id="ot-noteBy" value="Peach Corcelles" required>
                </div>
            </div>
        </form>
    </div>

    <!-- JAVASCRIPT -->
    <script src="../../js/main.js"></script>
</body>
</html>