<?php

    if(!session_id())session_start();
    $server = "localhost";
    $un = "root";
    $pw = "";
    $db_name = "wpasg2";

    $connection = mysqli_connect($server, $un, $pw, $db_name);

    if($connection){
        
    }else{
        throw new Exception("Mysql Connection Error:" .mysqli_error($connection));
    }

?>