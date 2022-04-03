<?php
    include("config.php");
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
    <script type="text/javascript">

        function numbersOnly(e){
            var x = e.which || e.keycode;
            if((x >= 48 && x <= 57)){
                return true;
            }else{
                return false;
            }
        }

    </script>
    <h3 class="text-center" style="margin-top:30px">Register</h3>
    <form action="prosesRegister.php" method="post" enctype="multipart/form-data" style="margin:3%">
        <div class="row">
            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Depan</div>
                    <div class="col-8"><input type="text" name="namaDepan" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tempat Lahir</div>
                    <div class="col-8"><input type="text" name="tempatLahir" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Warga Negara</div>
                    <div class="col-8"><input type="text" name="wargaNegara" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Alamat</div>
                    <div class="col-8"><textarea name="alamat" rows="4" style="border:none;width:100%" required></textarea></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Username</div>
                    <div class="col-8"><input type="text" name="username" minlength="8" style="border:none;width:100%" required></div><br/>
                    <?php if(isset($username_error)){ ?>
                            <p><?php echo $username_error ?> </p>
                    <?php } ?>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Tengah</div>
                    <div class="col-8"><input type="text" name="namaTengah" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tgl Lahir</div>
                    <div class="col-8"><input type="date" name="tanggalLahir" placeholder="dd/mm/yyyy" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Email</div>
                    <div class="col-8"><input type="email" name="email" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:110px">
                    <div class="col-4">Kode Pos</div>
                    <div class="col-8"><input type="text" name="kodePos" onkeypress="return numbersOnly(event)" minlength="5" maxlength="5" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Password 1</div>
                    <div class="col-8"><input type="password" minlength="8" name="password1" style="border:none;width:100%" required></div><br/>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Belakang</div>
                    <div class="col-8"><input type="text" name="namaBelakang" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">NIK</div>
                    <div class="col-8"><input type="text" minlength="16" maxlength="16" name="nik"  onkeypress="return numbersOnly(event)" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">No HP</div>
                    <div class="col-8"><input type="text" minlength="10" maxlength="13" onkeypress="return numbersOnly(event)" name="noHp" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:65px">
                    <div class="col-4">Foto Profil</div>
                    <div class="col-8"><label for="foto" class="btn">Silahkan Pilih Foto</label><input type="file" id="foto" name="foto" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Password 2</div>
                    <div class="col-8"><input type="password" minlength="8" name="password2" style="border:none;width:100%" required></div><br/>
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