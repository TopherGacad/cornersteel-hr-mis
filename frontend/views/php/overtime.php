<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Overtime</title>

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
        <i class="nav-icons fa-solid fa-arrow-right-from-bracket"></i>
    </div>

    <div class="edit-overtime-container">
        <div class="ot-header">
            <h3>Edit Overtime Request</h3>
            <div class="btn-container">
                    <input type="button" value="Discard" class="cancelBtn modal-btn" id="cancel-btn">
                    <button class="update-btn modal-btn" id="otEdit-update" type="submit">Update</button>
            </div>
        </div>

        <div class="content-container">
        <form action="" id="otEdit-form">

<!-- LEFT SIDE MODAL -->
<div class="form-left"  >
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
    <div class="field-container">
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
        </div>
    </div>
</body>
</html>