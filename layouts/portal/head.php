<?php
session_start();
if (!isset($_SESSION['auth_user'])){
    header("location: ../auth/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Media</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

    .navbar {
    margin-bottom: 0;
        border-radius: 0;
    }
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="active"><a href="#">Profile</a></li>
            </ul>
            <div class="dropdown" align="right">
                <button class="btn"  style="height: 50px" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i> Settings
                    <span class="caret"></span></button>

                <ul class="dropdown-menu dropdown-menu-right">

                    <li ><a title="Logout" href=" ../auth/logout.php">Logout</a></li>

                </ul>

            </div>
        </div>
    </div>
</nav>
<main>