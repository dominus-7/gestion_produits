<?php
    session_start();

    if (!isset($_SESSION['auth'])) {
        header('location:form.php');
    }


?>


