<?php
    include('config.php');

    if(isset($_POST['edit'])){

        $str_query = 'update user set namaDepan="'.$_POST['namaDepan'].'", namaTengah="'.$_POST['namaTengah'].'", namaBelakang="'.$_POST['namaBelakang'].'", tempatLahir="'.$_POST['tempatLahir'].'", tanggalLahir="'.$_POST['tanggalLahir'].'", nik="'.$_POST['nik'].'", wargaNegara="'.$_POST['wargaNegara'].'", email="'.$_POST['email'].'", noHp="'.$_POST['noHp'].'", alamat="'.$_POST['alamat'].'", kodePos="'.$_POST['kodePos'].'" where username="'.$_SESSION['usernameSession'].'"';

        $query = mysqli_query($connection, $str_query);

        if($query){
            $_SESSION['namaDepanSession'] = $_POST["namaDepan"];
            $_SESSION['namaTengahSession'] = $_POST["namaTengah"];
            $_SESSION['namaBelakangSession'] = $_POST["namaBelakang"];
            $_SESSION['tempatLahirSession'] = $_POST["tempatLahir"];
            $_SESSION['tanggalLahirSession'] = $_POST["tanggalLahir"];
            $_SESSION['nikSession'] = $_POST["nik"];
            $_SESSION['wargaNegaraSession'] = $_POST["wargaNegara"];
            $_SESSION['emailSession'] = $_POST["email"];
            $_SESSION['noHpSession'] = $_POST["noHp"];
            $_SESSION['alamatSession'] = $_POST["alamat"];
            $_SESSION['kodePosSession'] = $_POST["kodePos"];
            header("Location: profile.php");
        }else{
            echo "proses edit gagal".mysqli_error($connection);
        }
    }


?>