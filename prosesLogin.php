<?php
    include("config.php");

    if(isset($_POST['login'])){

        $str_query = "select * from user";
        $result = mysqli_query($connection, $str_query);
        if($result){
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_array($result)){
                    echo "ASDSADA";
                    if(($row["username"] == $_POST["usernameLogin"]) && ($row["password"] == $_POST["passwordLogin"])){
                        $_SESSION['login_error'] = false;
                        $_SESSION['usernameSession'] = $row["username"];
                        $_SESSION['namaDepanSession'] = $row["namaDepan"];
                        $_SESSION['namaTengahSession'] = $row["namaTengah"];
                        $_SESSION['namaBelakangSession'] = $row["namaBelakang"];
                        $_SESSION['namaDepanSession'] = $row["namaDepan"];
                        $_SESSION['tempatLahirSession'] = $row["tempatLahir"];
                        $_SESSION['tanggalLahirSession'] = $row["tanggalLahir"];
                        $_SESSION['nikSession'] = $row["nik"];
                        $_SESSION['wargaNegaraSession'] = $row["wargaNegara"];
                        $_SESSION['emailSession'] = $row["email"];
                        $_SESSION['noHpSession'] = $row["noHp"];
                        $_SESSION['alamatSession'] = $row["alamat"];
                        $_SESSION['kodePosSession'] = $row["kodePos"];
                        $_SESSION['fotoSession'] = $row["foto"];
                        $_SESSION['login_error'] = false;
                        header("Location: home.php");
                    }else{
                        header("Location: login.php");
                    }
                }
            }else{
                header("Location: login.php");
            }
        }

    }
?>