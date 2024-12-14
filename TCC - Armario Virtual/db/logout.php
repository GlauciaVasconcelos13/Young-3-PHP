<?php
    if(!isset($_SESSION)){
        session_start (); 
    }
    session_destroy();
    header("Location:../screens/login/login.php?saiu_do_login");
?>