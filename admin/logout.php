<?php
    require '../config/function.php';

    if(isset($_SESSION['loggedInAdmin'])){
        logoutSession();
        redirect('../login.php', 'Logged Out Successfully.', 'alert-success');
    }