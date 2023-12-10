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
                        <?php if ($recipe["weight"] === null) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight1"] === null) : ?>
                            <p> </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight1"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight2"] === null) : ?>
                            <p> </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight2"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight3"] === null) : ?>
                            <p> </p>
                            <?php else : ?>
                            <p> <?= $recipe["weight3"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight4"] === null) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight4"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight5"] === 0) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight5"]  . " " . "g" ?></p>
                        <?php endif ?>
                        
                        <?php if ($recipe["weight6"] === 0) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight6"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight7"] === 0) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight7"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight8"] === 0) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight8"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight9"] === 0) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight9"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight10"] === 0) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight10"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($recipe["weight11"] === 0) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $recipe["weight11"]  . " " . "g" ?></p>
                        <?php endif ?>
                  
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