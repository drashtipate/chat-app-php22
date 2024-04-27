<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: insert.php');
        exit;
    } else {
        // Show users the page!
    }
?>



