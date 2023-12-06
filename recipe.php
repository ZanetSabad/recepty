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
    <link rel="stylesheet" href="css/footer.css">
    <title>Recept</title>
</head>
<body>

    <?php require "assets/header.php" ?>

    <main>
        <section>
            <?php if($recipe === NULL): ?>
                <p>Recept neexistuje</p>
            <?php else : ?>
                <div class="box-one">
                    <h2><?= $recipe["name"] ?></h2>
                    <p><?= $recipe["weight"] ?></p>    
                    <p><?= $recipe["basis"] ?></p>    
                    <p><?= $recipe["weight1"] ?></p>
                    <p><?= $recipe["basis1"] ?></p>
                    <p><?= $recipe["weight2"] ?></p>
                    <p><?= $recipe["basis2"] ?></p> 
                    <p><?= $recipe["weight3"] ?></p>
                    <p><?= $recipe["basis3"] ?></p> 
                    <p><?= $recipe["weight4"] ?></p>
                    <p><?= $recipe["basis4"] ?></p> 
                    <p><?= $recipe["weight5"] ?></p>
                    <p><?= $recipe["basis5"] ?></p> 
                </div>    
                <div class="box-two">
                    <p><?= $recipe["weight6"] ?></p>
                    <p><?= $recipe["basis6"] ?></p> 
                    <p><?= $recipe["weight7"] ?></p>
                    <p><?= $recipe["basis7"] ?></p> 
                    <p><?= $recipe["weight8"] ?></p>
                    <p><?= $recipe["basis8"] ?></p>
                    <p><?= $recipe["weight9"] ?></p>
                    <p><?= $recipe["basis9"] ?></p> 
                    <p><?= $recipe["weight10"] ?></p>
                    <p><?= $recipe["basis10"] ?></p> 
                    <p><?= $recipe["weight11"] ?></p>
                    <p><?= $recipe["basis11"] ?></p>   
                </div>    
            <?php  endif ?>    
        </section>
    </main>


    <?php require "assets/footer.php" ?>
    
</body>
</html>