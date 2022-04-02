<?php
    require("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html,
        body{
            margin: 0px;
            background-color: #cad1ff;
        }
        .row{
            font-family: "Times New Roman", Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .col a{
            color: black;
            text-decoration: none;
            
        }
        .col a:hover{
            border-bottom: 4px solid black;
        }
    </style>
</head>
<body>
    <div class="row" style="margin-top:20px;background-color:#f9ffca;height:50px">
        <div class="col-6" style="margin-left:20px">Aplikasi Pengelolaan Keuangan</div>
        <div class="col" style="padding-left:100px"><a href="home.php">Home</a></div>
        <div class="col" style="padding-right:100px"><a href="profile.php">Profile</a></div>
        <div class="col" style="text-align:right;margin-right:20px"><a href="logout.php">Logout</a></div>
    </div>
    <div class="row" style="margin-top:100px">
        Halo 
        <?php
            echo " ". $_SESSION['namaDepanSession']." ".$_SESSION['namaTengahSession']." ".$_SESSION['namaBelakangSession']; 
        ?> , Selamat datang di Aplikasi Pengelolaan Keuangan
    </div>
</body>
</html>