<?php
   
    if(!isset($_SESSION["username"])) {
        header("Location: lo.php");
        exit();
    }
?>
