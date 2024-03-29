<?php
include __DIR__ . "/../bootstrap/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Web Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/public/css/blog-home.css" rel="stylesheet">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">My App</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/">About</a>
                </li>
                <li>
                    <a href=/">Contact</a>
                </li>
            </ul>

            <div class="btn-group" style="margin: 8px;float: right">
                <?php if(!checkLogin()) : ?>
                    <a href="/login.php" class="btn btn-success">Login</a>
                    <a href="/register.php" class="btn btn-danger">Register</a>
                <?php else : ?>
                    <?php if(checkAdmin()) : ?>
                        <a href="/admin" class="btn btn-info">Admin Panel</a>
                    <?php endif; ?>
                    <a href="/user-panel.php" class="btn btn-success">Panel</a>
                    <a href="/logout.php" class="btn btn-danger">Logout</a>
                <?php endif; ?>

            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>