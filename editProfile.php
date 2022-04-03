<?php
    require("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
    <div class="row" style="margin-top:20px;background-color:#f9ffca;height:50px">
        <div class="col-6" style="margin-left:20px">Aplikasi Pengelolaan Keuangan</div>
        <div class="col" style="padding-left:100px"><a href="home.php">Home</a></div>
        <div class="col" style="padding-right:100px"><a href="profile.php">Profile</a></div>
        <div class="col" style="text-align:right;margin-right:20px"><a href="logout.php">Logout</a></div>
    </div>
    <div class="row" style="margin-top:20px"><h4>Profil Pribadi</h4></div>
    <div class="row">
            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Depan</div>
                    <div class="col-8"><?php echo $_SESSION["namaDepanSession"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tempat Lahir</div>
                    <div class="col-8"><?php echo $_SESSION["tempatLahirSession"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Warga Negara</div>
                    <div class="col-8"><?php echo $_SESSION["wargaNegaraSession"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Alamat</div>
                    <div class="col-8"><?php echo $_SESSION["alamatSession"] ?></div>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Tengah</div>
                    <div class="col-8"><?php echo $_SESSION["namaTengahSession"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tgl Lahir</div>
                    <div class="col-8"><?php echo $_SESSION["tanggalLahirSession"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Email</div>
                    <div class="col-8"><?php echo $_SESSION["emailSession"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Kode Pos</div>
                    <div class="col-8"><?php echo $_SESSION["kodePosSession"] ?></div>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Belakang</div>
                    <div class="col-8"><?php echo $_SESSION["namaBelakangSession"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">NIK</div>
                    <div class="col-8"><?php echo $_SESSION["nikSession"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">No HP</div>
                    <div class="col-8"><?php echo $_SESSION["noHpSession"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Foto Profil</div>
                    <div class="col-8"> 
                        <img src="getImage.php" alt="fotoRegis" style="max-height:100px;overflow:hidden;">
                    </div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4"><button type="button" class="btn btn-lg" onclick="location.href='editProfile.php'" style="background-color:#fdd7ac; width:100%; height:30px; font-size:15px; border:solid black 2px; display: flex; justify-content:center; align-items:center; border-radius: 10px;">Edit Profile</button></div>
                </div>
            </div>
    </div>
</body>
</html>