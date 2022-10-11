<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "vue_todo_app_db";

    $connexion = mysqli_connect($host, $user, $password, $db_name);

    if ( !$connexion ){
        die("Connection failed: " . mysqli_connect_error());
    }


?>