<?php

require "url.php";

    /**
     *  Vytažení z databáze všechny recepty
     * 
     * @param object $connection - připojení na databázi
     * 
     * @return array - pole objektů, každý objekt je jeden recept
     * 
     */
    
    function getAllRecipe($connection){
        $sql = "SELECT *
                FROM recepty ";

        $result = mysqli_query($connection, $sql);
        
        if($result === false){
            echo mysqli_error($connection);
        } else {
            $recipe = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $recipe;
        }
    }

/**
 * Inforamce podle ID
 * 
 * @param object $connection = připojení k databázi
 * @param integer $id = ID receptu
 * 
 * @return mixed asociativní pole, které obsahujue inforamce o daném receptu
 * 
 */

    function getRecipe($connection, $id) { 
        $sql = "SELECT * 
                FROM recepty
                WHERE id = ?";

        $stmt = mysqli_prepare($connection, $sql);
        
        if($stmt === false) {
            echo mysqli_error($connection);
        } else {
            mysqli_stmt_bind_param($stmt, "i", $id);

            if(mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                return mysqli_fetch_array($result, MYSQLI_ASSOC);
            }
        }
    }   

    /**
     * Přidá recept do databáze a přesměruje na zadaný recept
     * 
     * @param object $connection - napojení na databázi
     * @param string $name = název receptu
     * @param integer $weight - množství 1.ingredience
     * @param string $basis - název 1.ingredince
     * @param integer $weight1 - množství 2.ingredience
     * @param string $basis - název 2.ingredince
     * @param integer $weight - množství 3.ingredience
     * @param string $basis - název 3.ingredince
     * @param integer $weight - množství 4.ingredience
     * @param string $basis - název 4.ingredince
     * @param integer $weight - množství 5.ingredience
     * @param string $basis - název 5.ingredince
     * @param integer $weight - množství 6.ingredience
     * @param string $basis - název 6.ingredince
     * @param integer $weight - množství 7.ingredience
     * @param string $basis - název 7.ingredince
     * @param integer $weight - množství 8.ingredience
     * @param string $basis - název 8.ingredince
     * @param integer $weight - množství 9.ingredience
     * @param string $basis - název 9.ingredince
     * @param integer $weight - množství 10.ingredience
     * @param string $basis - název 10.ingredince
     * @param integer $weight - množství 11.ingredience
     * @param string $basis - název 11.ingredince
     * @param string $method - popis postupu receptu 
     * 
     * @return void 
     */

    function addRecipe($connection) { 
    $sql = "INSERT INTO recepty (name, weight, basis, weight1, basis1, weight2, basis2, weight3, basis3, weight4, basis4, weight5, basis5, method) value (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($connection, $sql);

        if($stmt === false) {
            echo mysqli_error($connection);
        } else {
            mysqli_stmt_bind_param($stmt, "sisisisisisiss", $_POST["name"], $_POST["weight"], $_POST["basis"], $_POST["weight1"], $_POST["basis1"], $_POST["weight2"], $_POST["basis2"], $_POST["weight3"], $_POST["basis3"], $_POST["weight4"], $_POST["basis4"], $_POST["weight5"], $_POST["basis5"], $_POST["method"]);

            if(mysqli_stmt_execute($stmt)) {
                $id = mysqli_insert_id($connection);
                // echo "Recept vložen";
                redirectUrl("recepty/one-recipe.php?id=$id");
            } else {
                echo mysqli_stmt_error($stmt);
            }
        }
 
    }

?>