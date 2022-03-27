<?php
    session_start();
    if(isset($_POST['login'])){
        if(isset($_SESSION)){
            if(($_POST["usernameLogin"] == $_SESSION["usernameRegis"]) && ($_POST["passwordLogin"] == $_SESSION["passwordRegis"])){
                header('Location: home.php');
            } else{
                $_SESSION['login'] = true;
                header('Location: login.php');
            }
        }

    }
?>