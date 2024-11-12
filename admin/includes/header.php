<?php 
require '../config/function.php';
require 'authentication.php';
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($page_title)){echo "$page_title"; } ?></title>

    <!-- Bootsrap cdn links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Link custom css -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

    <!-- Begin container fluid -->
    <div class="container-fluid">
        <!-- Begin row -->
        <div class="row">
            <!-- Include side bar -->
            <?php include("includes/sidebar.php"); ?>
                <!-- include nav bar -->
                <?php include("includes/navbar.php"); ?>
