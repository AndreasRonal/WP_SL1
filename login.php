<?php

if(!isset($_SESSION['login'])){
    $_SESSION['login'] = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html,
        body{
            margin: 0px;
            background-color: #fbfdac; 
        }
        .row{
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>
    <h3 class="text-center" style="margin-top:30px; margin-bottom:80px">Login</h3>
    <form action="prosesLogin.php" method="post" style="margin:1%; text-align:center; width:50vw; margin-left:25vw;">
        <div class="row">
            <div class="col" style="background-color:#ace6fd">
                <div class="row" style="margin-top:30px; margin-bottom:30px">
                    <div class="col-4" style="text-align:right">Username</div>
                    <div class="col-6"><input type="text" name="usernameLogin" style="border:none;width:100%" required></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4" style="text-align:right">Password</div>
                    <div class="col-6"><input type="password" name="passwordLogin" style="border:none;width:100%" required></div>
                </div>
                <div class="row" style="margin-bottom:30px; margin-left: 220px">
                    <div class="col-4"><input type="submit" name="login" value="Login" style="background-color:#adf59f; width:100%; height:30px; border:none; font-size:15px; border-radius: 0px;"></div>
                    <div class="col-4"><button type="button" class="btn btn-lg" onclick="location.href='welcome.php'" style="background-color:#fdd7ac; width:100%; height:30px; font-size:15px; border:none; display: flex; justify-content:center; align-items:center; border-radius: 0px;">Kembali</button></div>
                </div>
                <?php
                    if($_SESSION['login'] === true){
                        $message = "Login Gagal";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                ?>
            </div>
        </div>
    </form>
</body>
</html>