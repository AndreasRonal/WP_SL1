<?php
    require("config.php");

    if(isset($_POST['login'])){

        if(!isset($_SESSION['login_error'])) {
            $_SESSION['login_error'] = true;
        }
        $str_query = "select 'username', 'password' from user";
        $result = mysqli_query($connection, $str_query);
        if($result){
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_array($result)){
                    if(($row["username"] == $_POST["usernameLogin"]) && ($row["password"] == $_POST["passwordLogin"])){
                        $_SESSION['login_error'] = false;
                        header("Location: home.php");
                    }
                }
                $_SESSION['login_error'] = true;
                header("Location: login.php");
            }else{
                $_SESSION['login_error'] = true;
                header("Location: login.php");
            }
        }

    }
?>