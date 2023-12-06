<?php
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



?>