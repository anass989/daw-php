<?php
    session_id("session-13-01");
    session_start();

    require("generate_content.php");
    login_msg($_SESSION['uid']);
    if (isset($_POST['logout'])) {
        header('Location: logout.php');
    }
    
?>