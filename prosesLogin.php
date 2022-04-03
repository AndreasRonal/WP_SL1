<?php
    include("config.php");

    if(isset($_POST['login'])){

        $str_query = "select * from user";
        $result = mysqli_query($connection, $str_query);
        if($result){
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_array($result)){
                    if(($row["username"] == $_POST["usernameLogin"]) && ($row["password"] == $_POST["passwordLogin"])){
                        $_SESSION['usernameSession'] = $row["username"];
                        $_SESSION['namaDepanSession'] = $row["namaDepan"];
                        $_SESSION['namaTengahSession'] = $row["namaTengah"];
                        $_SESSION['namaBelakangSession'] = $row["namaBelakang"];
                        $_SESSION['tempatLahirSession'] = $row["tempatLahir"];
                        $_SESSION['tanggalLahirSession'] = $row["tanggalLahir"];
                        $_SESSION['nikSession'] = $row["nik"];
                        $_SESSION['wargaNegaraSession'] = $row["wargaNegara"];
                        $_SESSION['emailSession'] = $row["email"];
                        $_SESSION['noHpSession'] = $row["noHp"];
                        $_SESSION['alamatSession'] = $row["alamat"];
                        $_SESSION['kodePosSession'] = $row["kodePos"];
                        $_SESSION['namaFotoSession'] = $row["namaFoto"];
                        $_SESSION['fotoSession'] = $row["foto"];
                        header("Location: home.php");
                    }
                }
            }else{
                header("Location: login.php");
            }
        }
    }
?>