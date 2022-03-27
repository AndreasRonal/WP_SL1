<?php
    session_start();

    if(isset($_POST['register'])){
        
        $namaDepan = $_POST['namaDepan'];
        $tempatLahir = $_POST['tempatLahir'];
        $wargaNegara = $_POST['wargaNegara'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $namaTengah = $_POST['namaTengah'];
        $tanggalLahir = $_POST['tanggalLahir'];
        $email = $_POST['email'];
        $kodePos = $_POST['kodePos'];
        $password1 = $_POST['password1'];
        $namaBelakang = $_POST['namaBelakang'];
        $nik = $_POST['nik'];
        $noHp = $_POST['noHp'];
        $password2 = $_POST['password2'];

        if(strlen($username) < 8){
            $username_error = "Username harus memiliki minimal 8 karakter";
        }else{
            $_SESSION["usernameRegis"] = $username;
            $username_error = '';
        }

        if(strlen($kodePos) != 5){
            $kodePos_error = "Kode pos harus memiliki 5 karakter";
        }else if(!is_numeric($kodePos)){
            $kodePos_error = "Kode pos harus hanya angka";
        }else{
            $_SESSION["kodePosRegis"] = $kodePos;
            $kodePos_error = '';
        }
        
        if(strlen($password1) < 8){
            $password1_error = "Password harus memiliki minimal 8 karakter";
        }else if($password2 != $password1){
            $password2_error = "Password berbeda dari password 1";
        }else{
            $_SESSION["passwordRegis"] = $password1;
            $password1_error = '';
            $password2_error = '';
        }

        if(strlen($nik) != 16){
            $nik_error = "NIK harus 16 digit";
        }else if(!is_numeric($nik)){
            $nik_error = "NIK harus hanya angka";
        }else{
            $_SESSION["nikRegis"] = $nik;
            $nik_error = '';
        }

        if(strlen($noHp) < 10){
            $noHp_error = "Nomor handphone minimal 10 digit";
        }else if(strlen($noHp) > 13){
            $noHp_error = "Nomor handphone maksimal 13 digit";
        }else if(!is_numeric($noHp)){
            $noHp_error = "Nomor handphone harus hanya angka";
        }else{
            $_SESSION["noHpRegis"] = $noHp;
            $noHp_error = '';
        }

        $namaFile = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        $dirUpload = "terupload/";
        $target_file = $dirUpload . basename($namaFile);
        if(!file_exists($dirUpload)){
            mkdir($dirUpload, 0777, true);
        }
        $uploadFlag = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(file_exists($target_file)){
            $upload_error = "Maaf, file sudah pernah diupload.";
            $uploadFlag = 0;
        }else if($_FILES["foto"]["size"] > 5000000){
            $upload_error = "Maaf, maksimal ukuran file 5MB.";
            $uploadFlag = 0;
        }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
            $upload_error = "Maaf, hanya tipe file JPG, JPEG, PNG & GIF yang diizinkan.";
            $uploadFlag = 0;
        }

        if ($uploadFlag == 0){
            $upload_error = "Maaf, file tidak terupload.";
        }

        if(empty($username_error) && empty($kodePos_error) && empty($password1_error) && empty($password2_error) && empty($nik_error) && empty($noHp_error) && $uploadFlag == 1){
            $_SESSION["namaDepanRegis"] = $namaDepan;
            $_SESSION["tempatLahirRegis"] = $tempatLahir;
            $_SESSION["wargaNegaraRegis"] = $wargaNegara;
            $_SESSION["alamatRegis"] = $alamat;
            $_SESSION["namaTengahRegis"] = $namaTengah;
            $_SESSION["tanggalLahirRegis"] = $tanggalLahir;
            $_SESSION["namaBelakangRegis"] = $namaBelakang;
            $_SESSION["emailRegis"] = $email;
            move_uploaded_file($tmp_name, $target_file);
            $_SESSION['fotoRegis'] = $namaFile;
            $_SESSION['register'] = true;
            
            header('Location: welcome.php');
        }else{
            include('register.php');
        }
    }
?>