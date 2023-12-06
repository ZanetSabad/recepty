<?php 

    $db_host = "localhost";
    $db_user = "Zany";
    $db_password = "zany2589";
    $db_name = "moje recepty";

    $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    } else {
        echo "Úspěšné připojení";
    }

    $sql = "SELECT * FROM recepty";

    $result = mysqli_query($connection, $sql);
 
    $recipe = mysqli_fetch_all($result, MYSQLI_ASSOC)
?>