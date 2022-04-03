<?php
    include("config.php");

    if(isset($_POST['register'])){

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

        $namaFile = mysqli_real_escape_string($connection, $_FILES['foto']['name']);
        $tmp_name = mysqli_real_escape_string($connection, file_get_contents($_FILES['foto']['tmp_name']));
        $imageType = mysqli_real_escape_string($connection, $_FILES['foto']['type']);

        if(substr($imageType,0,5) != "image"){
            $image_error = "Hanya file tipe gambar saja";
            header("Location: register.php");
        }

        if(empty($password2_error)){
            $str_query = "insert into user values('".$_POST["namaDepan"]."', '".$_POST["namaTengah"]."', '".$_POST["namaBelakang"]."', '".$_POST["tempatLahir"]."', '".$_POST["tanggalLahir"]."', '".$_POST["nik"]."', '".$_POST["wargaNegara"]."', '".$_POST["email"]."', '".$_POST["noHp"]."', '".$_POST["alamat"]."', '".$_POST["kodePos"]."', '$namaFile', '$tmp_name', '".$_POST["username"]."', '".$_POST["password1"]."')";
            
            $query = mysqli_query($connection, $str_query);
            if($query){
                header("Location: welcome.php");
            }else{
                header('Location: register.php');
            }
        }else{
            header('Location: register.php');
        }
    }
?>