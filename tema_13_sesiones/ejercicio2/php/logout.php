<?php
    require("generate_content.php");
    session_id("session-13-01");
    session_start();
    session_destroy();
    logout_msg();
    header('Refresh: 2; URL=../index.php');
?>