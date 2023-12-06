<?php 

    require "assets/db.php";
    require "assets/fce-recipe.php";

    $connection = connectionDB();

    if( isset($_GET["id"]) and is_numeric($_GET["id"])) {
        $recipe = getRecipe($connection, $_GET["id"]);
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/recipe.css">
    <title>Recept</title>
</head>
<body>

    <?php require "assets/header.php" ?>

    <main>
        <section class="recipe-list">
            <?php if($recipe === NULL): ?>
                <p>Recept neexistuje</p>
            <?php else : ?>
                <h2><?= $recipe["name"] ?></h2>
                <div class="box">
                       <div class="weight">
                            <p><?= $recipe["weight"] . " " . "g" ?></p>
                            <p><?= $recipe["weight1"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight2"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight3"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight4"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight5"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight6"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight7"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight8"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight9"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight10"] . " " . "g"  ?></p>
                            <p><?= $recipe["weight11"] . " " . "g"  ?></p>
                       </div>
                       <div class="basis">
                            <p><?= $recipe["basis"]?></p>
                            <p><?= $recipe["basis1"]?></p>
                            <p><?= $recipe["basis2"]?></p>
                            <p><?= $recipe["basis3"]?></p>
                            <p><?= $recipe["basis4"]?></p>
                            <p><?= $recipe["basis5"]?></p>
                            <p><?= $recipe["basis6"]?></p>
                            <p><?= $recipe["basis7"]?></p>
                            <p><?= $recipe["basis8"]?></p>
                            <p><?= $recipe["basis9"]?></p>
                            <p><?= $recipe["basis10"]?></p>
                            <p><?= $recipe["basis11"]?></p>
                       </div>
                    </div>   
            <p class="method"><?= $recipe["method"]?></p>
            <?php  endif ?>    
        </section>
        <section class="button">
            <a href="">Edivat</a>
            <a href="">Smazat</a>
        </section>
    </main>


    <?php require "assets/footer.php" ?>
    
</body>
</html>


<!-- <div class="one-ingredient">
                            <p class="weight"><?= $recipe["weight"] ?></p>    
                            <p class="basis"><?= $recipe["basis"] ?></p>    
                        </div>
                        <div class="one-ingredient">
                            <p class="weight"><?= $recipe["weight1"] ?></p>
                            <p><?= $recipe["basis1"] ?></p>
                        </div>    
                        <div class="one-ingredient">
                            <p class="weight"><?= $recipe["weight2"] ?></p>
                            <p><?= $recipe["basis2"] ?></p> 
                        </div>
                        <div class="one-ingredient">
                            <p class="weight"><?= $recipe["weight3"] ?></p>
                            <p><?= $recipe["basis3"] ?></p> 
                        </div>
                        <div class="one-ingredient">    
                            <p class="weight"><?= $recipe["weight4"] ?></p>
                            <p><?= $recipe["basis4"] ?></p> 
                        </div>    
                        <div class="one-ingredient">
                            <p class="weight"><?= $recipe["weight5"] ?></p>
                            <p><?= $recipe["basis5"] ?></p> 
                        </div>  -->