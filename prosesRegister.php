<?php
    require("config.php");

    if(isset($_POST['register'])){

        if(!isset($_SESSION['register_error'])) {
            $_SESSION['register_error'] = false;
        }
        
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        $str_query = "select 'username' from user";
        $result = mysqli_query($connection, $str_query);
        if($result){
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_array($result)){
                    if($row["username"] == $_POST["username"]){
                        $_SESSION['username_error'] = "Username sudah terpakai";
                        header('Location: register.php');
                    }
                }
            }
        }

        if($password2 != $password1){
            $password2_error = "Password berbeda dari password 1";
        }else{
            $password2_error = '';
        }

        $namaFile = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        if(empty($password2_error)){
            $str_query = "insert into user values('".$_POST["namaDepan"]."', '".$_POST["namaTengah"]."', '".$_POST["namaBelakang"]."', '".$_POST["tempatLahir"]."', '".$_POST["tanggalLahir"]."', '".$_POST["nik"]."', '".$_POST["wargaNegara"]."', '".$_POST["email"]."', '".$_POST["noHp"]."', '".$_POST["alamat"]."', '".$_POST["kodePos"]."', '".$_POST["namaFile"]."', '".$_POST[$tmp_name]."', '".$_POST["username"]."', '".$_POST["password1"]."')";
            
            $query = mysqli_query($connection, $str_query);
            if($query){
                header("Location: welcome.php");
                $_SESSION['register_error'] = true;
            }else{
                header('Location: register.php');
                $_SESSION['register_error'] = false;
            }
        }else{
            header('Location: register.php');
            $_SESSION['register_error'] = false;
        }
    }
?>