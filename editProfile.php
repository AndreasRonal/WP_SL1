<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editProfile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html,
        body{
            margin: 0px;
            background-color: #c2f0f7;
        }
        .row{
            font-family: "Times New Roman", Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .col a{
            color: black;
            text-decoration: none;
            
        }
        .col a:hover{
            border-bottom: 4px solid black;
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
    <div class="row" style="margin-top:20px;background-color:#f9ffca;height:50px">
        <div class="col-6" style="margin-left:20px">Aplikasi Pengelolaan Keuangan</div>
        <div class="col" style="padding-left:100px"><a href="home.php">Home</a></div>
        <div class="col" style="padding-right:100px"><a href="profile.php">Profile</a></div>
        <div class="col" style="text-align:right;margin-right:20px"><a href="logout.php">Logout</a></div>
    </div>
    <div class="row" style="margin-top:20px"><h4>Profil Pribadi</h4></div>
    <form action="prosesEdit.php" method="post">
        <div class="row">
            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Depan</div>
                    <div class="col-8"><input type="text" name="namaDepan" value="<?php echo $_SESSION['namaDepanSession']?>" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tempat Lahir</div>
                    <div class="col-8"><input type="text" name="tempatLahir" value="<?php echo $_SESSION['tempatLahirSession']?>" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Warga Negara</div>
                    <div class="col-8"><input type="text" name="wargaNegara" value="<?php echo $_SESSION['wargaNegaraSession']?>" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Alamat</div>
                    <div class="col-8"><textarea name="alamat" rows="4" style="border:none;width:100%" required><?php echo $_SESSION['alamatSession']?></textarea></div><br/>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Tengah</div>
                    <div class="col-8"><input type="text" name="namaTengah" value="<?php echo $_SESSION['namaTengahSession']?>" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tgl Lahir</div>
                    <div class="col-8"><input type="date" name="tanggalLahir" value="<?php echo $_SESSION['tanggalLahirSession']?>" placeholder="dd/mm/yyyy" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Email</div>
                    <div class="col-8"><input type="email" name="email" style="border:none;width:100%" value="<?php echo $_SESSION['emailSession']?>" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:110px">
                    <div class="col-4">Kode Pos</div>
                    <div class="col-8"><input type="text" name="kodePos" onkeypress="return numbersOnly(event)" minlength="5" maxlength="5" value="<?php echo $_SESSION['kodePosSession']?>" style="border:none;width:100%" required></div><br/>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Belakang</div>
                    <div class="col-8"><input type="text" name="namaBelakang" value="<?php echo $_SESSION['namaBelakangSession']?>" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">NIK</div>
                    <div class="col-8"><input type="text" minlength="16" maxlength="16" name="nik"  onkeypress="return numbersOnly(event)" value="<?php echo $_SESSION['nikSession']?>" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">No HP</div>
                    <div class="col-8"><input type="text" minlength="10" maxlength="13" onkeypress="return numbersOnly(event)" value="<?php echo $_SESSION['noHpSession']?>" name="noHp" style="border:none;width:100%" required></div><br/>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4"><input type="submit" name="edit" value="Save" style="background-color:#adf59f; width:100%; height:30px; border:solid black 2px; font-size:15px; border-radius: 10px;"></div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>