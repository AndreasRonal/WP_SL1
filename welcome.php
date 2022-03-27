<?php

    if(!isset($_SESSION['register'])){
        $_SESSION['register'] = false;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelolaan Keuangan</title>
    <!-- <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/getting-started/introduction/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html,
        body{
            margin: 0px;
            background-color: #e5edeb; 
        }
        .buttonLogin{
            display:flex;
            align-items:center;
            justify-content:flex-end;
            margin-right:30px
        }
        .buttonRegister{
            display:flex;
            align-items:center;
            justify-content:flex-start;
            margin-left:30px
        }
        .row{
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>
    <div class="row" style="margin-top:30px">
        <div class="col text-center">Aplikasi Pengelolaan Keuangan</div>
        <h2 class="text-center" style="margin-top:80px;margin-bottom:50px">Selamat Datang di Aplikasi Pengelolaan Keuangan</h2>
        <div class="col buttonLogin"><button type="button" class="btn btn-info btn-lg" onclick="location.href='login.php'">Login</button></div>
        <div class="col buttonRegister"><button type="button" class="btn btn-success btn-lg"onclick="location.href='register.php'">Register</button></div>
        <?php 
            if($_SESSION['register'] === true){
                $message = "Register Sukses";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        ?>
    </div>
</body>
</html>