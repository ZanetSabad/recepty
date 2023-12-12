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
     * @param string $basis1 - název 2.ingredince
     * @param integer $weight2 - množství 3.ingredience
     * @param string $basis2 - název 3.ingredince
     * @param integer $weight3 - množství 4.ingredience
     * @param string $basis3 - název 4.ingredince
     * @param integer $weight4 - množství 5.ingredience
     * @param string $basis4 - název 5.ingredince
     * @param integer $weight5 - množství 6.ingredience
     * @param string $basis5 - název 6.ingredince
     
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


    /**
     * @param object $connection - přihlášení do databáze
     * @param string $name - název receptu 
     * @param integer $weight - množství 1.ingredience
     * @param string $basis - název 1.ingredince
     * @param integer $weight1 - množství 2.ingredience
     * @param string $basis1 - název 2.ingredince
     * @param integer $weight2 - množství 3.ingredience
     * @param string $basis2 - název 3.ingredince
     * @param integer $weight3 - množství 4.ingredience
     * @param string $basis3 - název 4.ingredince
     * @param integer $weight4 - množství 5.ingredience
     * @param string $basis4 - název 5.ingredince
     * @param integer $weight5 - množství 6.ingredience
     * @param string $basis5 - název 6.ingredince
     * @param string $method - popis postupu receptu 
     * 
     * @return void
     */

    function editRecipe($connection, $name, $weight, $basis, $weight1, $basis1, $weight2, $basis2, $weight3, $basis3, $weight4, $basis4, $weight5, $basis5, $method, $id) {

        $sql = " UPDATE recepty 
                SET name = ?,
                    weight = ?,
                    basis = ?,
                    weight1 = ?,
                    basis1 = ?,
                    weight2 = ?,
                    basis2 = ?,
                    weight3 = ?,
                    basis3 = ?,
                    weight4 = ?,
                    basis4 = ?,
                    weight5 = ?,
                    basis5 = ?,
                    method = ?
                WHERE id = ?
                ";
                
        $stmt = mysqli_prepare($connection, $sql);
        
            if($stmt === false) {
                echo mysqli_error($connection);
            } else {
                mysqli_stmt_bind_param($stmt, "sisisisisisissi", $name, $weight, $basis, $weight1, $basis1, $weight2, $basis2, $weight3, $basis3, $weight4, $basis4, $weight5, $basis5, $method, $id);

                if(mysqli_stmt_execute($stmt)) {
                    echo "Informace v receptu byly změněny";
                } 
            }
    }

?>