<?php
session_start();
// $_SESSION['login'] = TRUE;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="ticketcss.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>سامانه تیکتینگ بهادر</title>
</head>

<body>
    <div class="header">
        <div class="row">
            <div class="col-md">
            <br />

                <h4 class="headerh4">سامانه تیکتینگ بهادر</h4>
            </div>
            <?php
            if (!(isset ($_SESSION['login'])&&$_SESSION['login']))
            {
                ?>
            <div class="col-md" id="headerbtn">
            <br/>
                <button class="btn btn-danger" onclick="window.location.href='login.php';">ورود</button>
                <button class="btn btn-danger" onclick="window.location.href='register.php';">ثبت نام</button>
            </div>
            <?php
            }
            ?>
        </div>
    </div>