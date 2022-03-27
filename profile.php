<?php
    session_start();
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
                    <div class="col-8"><?php echo $_SESSION["namaDepanRegis"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tempat Lahir</div>
                    <div class="col-8"><?php echo $_SESSION["tempatLahirRegis"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Warga Negara</div>
                    <div class="col-8"><?php echo $_SESSION["wargaNegaraRegis"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Alamat</div>
                    <div class="col-8"><?php echo $_SESSION["alamatRegis"] ?></div>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Tengah</div>
                    <div class="col-8"><?php echo $_SESSION["namaTengahRegis"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Tgl Lahir</div>
                    <div class="col-8"><?php echo $_SESSION["tanggalLahirRegis"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Email</div>
                    <div class="col-8"><?php echo $_SESSION["emailRegis"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Kode Pos</div>
                    <div class="col-8"><?php echo $_SESSION["kodePosRegis"] ?></div>
                </div>
            </div>

            <div class="col-4">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Nama Belakang</div>
                    <div class="col-8"><?php echo $_SESSION["namaBelakangRegis"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">NIK</div>
                    <div class="col-8"><?php echo $_SESSION["nikRegis"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">No HP</div>
                    <div class="col-8"><?php echo $_SESSION["noHpRegis"] ?></div>
                </div>
                <div class="row" style="margin-bottom:30px">
                    <div class="col-4">Foto Profil</div>
                    <div class="col-8"><img src="./terupload/<?php echo $_SESSION["fotoRegis"];?>" alt="fotoRegis" style="max-height:100px;overflow:hidden;"></div>
                </div>
            </div>
        </div>
</body>
</html>