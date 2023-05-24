<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../../frontend/views/php/login.php");