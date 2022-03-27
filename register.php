<?php

    if(!isset($namaDepan)){
        $namaDepan = '';
    }

    if(!isset($tempatLahir)){
        $tempatLahir = '';
    }

    if(!isset($wargaNegara)){
        $wargaNegara = '';
    }

    if(!isset($alamat)){
        $alamat = '';
    }

    if(!isset($username)){
        $username = '';
    }

    if(!isset($namaTengah)){
        $namaTengah = '';
    }

    if(!isset($tanggalLahir)){
        $tanggalLahir = '';
    }

    if(!isset($email)){
        $email = '';
    }

    if(!isset($kodePos)){
        $kodePos = '';
    }

    if(!isset($password1)){
        $password1 = '';
    }

    if(!isset($namaBelakang)){
        $namaBelakang = '';
    }

    if(!isset($nik)){
        $nik = '';
    }

    if(!isset($noHp)){
        $noHp = '';
    }

    if(!isset($password2)){
        $password2 = '';
    }

    if(!isset($register)){
        $register = 0;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html,
        body{
            margin: 0px;
            background-color: #c2f0f7;
        }
        .row{
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>
    <h3 class="text-center" style="margin-top:30px">Register</h3>
    <form action="prosesRegister.php" method="post" enctype="multipart/form-data" style="margin:3%">
        <div class="row">
            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Depan</div>
                    <div class="col-8"><input type="text" name="namaDepan" value="<?php echo htmlspecialchars($namaDepan)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($namaDepan_error)){ ?>
                            <p><?php echo $namaDepan_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tempat Lahir</div>
                    <div class="col-8"><input type="text" name="tempatLahir" value="<?php echo htmlspecialchars($tempatLahir)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($tempatLahir_error)){ ?>
                            <p><?php echo $tempatLahir_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Warga Negara</div>
                    <div class="col-8"><input type="text" name="wargaNegara" value="<?php echo htmlspecialchars($wargaNegara)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($wargaNegara_error)){ ?>
                            <p><?php echo $wargaNegara_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Alamat</div>
                    <div class="col-8"><textarea name="alamat" value="<?php echo htmlspecialchars($alamat)?>" rows="4" style="border:none;width:100%" required></textarea></div><br/>
                        <?php if(isset($alamat_error)){ ?>
                            <p><?php echo $alamat_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Username</div>
                    <div class="col-8"><input type="text" name="username" value="<?php echo htmlspecialchars($username)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($username_error)){ ?>
                            <p><?php echo $username_error ?> </p>
                        <?php } ?>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Tengah</div>
                    <div class="col-8"><input type="text" name="namaTengah" value="<?php echo htmlspecialchars($namaTengah)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($namaTengah_error)){ ?>
                            <p><?php echo $namaTengah_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tgl Lahir</div>
                    <div class="col-8"><input type="date" name="tanggalLahir" value="<?php echo htmlspecialchars($tanggalLahir)?>" placeholder="dd/mm/yyyy" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($tanggalLahir_error)){ ?>
                            <p><?php echo $tanggalLahir_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Email</div>
                    <div class="col-8"><input type="email" name="email" value="<?php echo htmlspecialchars($email)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($email_error)){ ?>
                            <p><?php echo $email_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:110px">
                    <div class="col-4">Kode Pos</div>
                    <div class="col-8"><input type="text" name="kodePos" value="<?php echo htmlspecialchars($kodePos)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($kodePos_error)){ ?>
                            <p><?php echo $kodePos_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Password 1</div>
                    <div class="col-8"><input type="password" name="password1" value="<?php echo htmlspecialchars($password1)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($password1_error)){ ?>
                            <p><?php echo $password1_error ?> </p>
                        <?php } ?>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Belakang</div>
                    <div class="col-8"><input type="text" name="namaBelakang" value="<?php echo htmlspecialchars($namaBelakang)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($namaBelakang_error)){ ?>
                            <p><?php echo $namaBelakang_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">NIK</div>
                    <div class="col-8"><input type="text" minlength="16" maxlength="16" name="nik" value="<?php echo htmlspecialchars($nik)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($nik_error)){ ?>
                            <p><?php echo $nik_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">No HP</div>
                    <div class="col-8"><input type="text" minlength="10" maxlength="13" name="noHp" value="<?php echo htmlspecialchars($noHp)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($noHp_error)){ ?>
                            <p><?php echo $noHp_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:65px">
                    <div class="col-4">Foto Profil</div>
                    <div class="col-8"><label for="foto" class="btn">Silahkan Pilih Foto</label><input type="file" id="foto" name="foto" style="visibility:hidden;border:none;width:100%" required></div><br/>
                        <?php if(isset($upload_error)){ ?>
                            <p><?php echo $upload_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Password 2</div>
                    <div class="col-8"><input type="password" name="password2" value="<?php echo htmlspecialchars($password2)?>" style="border:none;width:100%" required></div><br/>
                        <?php if(isset($password2_error)){ ?>
                            <p><?php echo $password2_error ?> </p>
                        <?php } ?>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4"><button type="button" class="btn btn-lg" onclick="location.href='welcome.php'" style="background-color:#fdd7ac; width:100%; height:30px; font-size:15px; border:solid black 2px; display: flex; justify-content:center; align-items:center; border-radius: 10px;">Kembali</button></div>
                    <div class="col-4"><input type="submit" name="register" value="Register" style="background-color:#adf59f; width:100%; height:30px; border:solid black 2px; font-size:15px; border-radius: 10px;"></div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>