<?php
    require("config.php");
    $str_query = 'select foto from user where username="'.$_SESSION["username"].'"';
    $result = mysqli_query($connection, $str_query);
    $row = mysql_fetch_assoc($result);

    // header("Content-type: image/jpeg");
    echo $row['foto'];
?>