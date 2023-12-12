<?php 

<<<<<<< HEAD
/**
 * Připojení k databázo
 * 
 * @param object $connection - připojení k databázi
 * 
 */

function connectionDB() {


=======
>>>>>>> de30dadcf8c40fd803edfc0347cc4bfec5451c1f
    $db_host = "localhost";
    $db_user = "Zany";
    $db_password = "zany2589";
    $db_name = "moje recepty";

    $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
<<<<<<< HEAD
    }
    return $connection;    
}
    // } else {
    //     echo "Úspěšné připojení";
    // }

    // $sql = "SELECT * FROM recepty";

    // $result = mysqli_query($connection, $sql);
 
    // $recipe = mysqli_fetch_all($result, MYSQLI_ASSOC);
=======
    } else {
        echo "Úspěšné připojení";
    }

    $sql = "SELECT * FROM recepty";

    $result = mysqli_query($connection, $sql);
 
    $recipe = mysqli_fetch_all($result, MYSQLI_ASSOC)
>>>>>>> de30dadcf8c40fd803edfc0347cc4bfec5451c1f
?>