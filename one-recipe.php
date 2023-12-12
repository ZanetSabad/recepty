<?php 

    require "assets/db.php";
    require "assets/fce-recipe.php";

    $connection = connectionDB();

    if( isset($_GET["id"]) and is_numeric($_GET["id"])) {
        $one_recipe = getRecipe($connection, $_GET["id"]);
        
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
            <?php if($one_recipe === NULL): ?>
                <p>Recept neexistuje</p>
            <?php else : ?>
                <h2><?= $one_recipe["name"] ?></h2>
                <div class="box">
                       <div class="weight">
                        <?php if ($one_recipe["weight"] === null) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $one_recipe["weight"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($one_recipe["weight1"] === null) : ?>
                            <p> </p>
                        <?php else : ?>
                            <p> <?= $one_recipe["weight1"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($one_recipe["weight2"] === null) : ?>
                            <p> </p>
                        <?php else : ?>
                            <p> <?= $one_recipe["weight2"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($one_recipe["weight3"] === null) : ?>
                            <p> </p>
                            <?php else : ?>
                            <p> <?= $one_recipe["weight3"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($one_recipe["weight4"] === null) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $one_recipe["weight4"]  . " " . "g" ?></p>
                        <?php endif ?>

                        <?php if ($one_recipe["weight5"] === 0) : ?>
                            <p>  </p>
                        <?php else : ?>
                            <p> <?= $one_recipe["weight5"]  . " " . "g" ?></p>
                        <?php endif ?>
                  
                       </div>
                       <div class="basis">
                            <p><?= $one_recipe["basis"]?></p>
                            <p><?= $one_recipe["basis1"]?></p>
                            <p><?= $one_recipe["basis2"]?></p>
                            <p><?= $one_recipe["basis3"]?></p>
                            <p><?= $one_recipe["basis4"]?></p>
                            <p><?= $one_recipe["basis5"]?></p>
                       </div>
                    </div>   
            <p class="method"><?= $one_recipe["method"]?></p>
            <?php  endif ?>    
        </section>
        <section class="button">
            <a href="edit-recipe.php?id=<?=$one_recipe['id']?>">Editovat</a>
            <a href="delete-recipe.php?id=<?=$one_recipe['id']?>">Smazat</a>
        </section>
    </main>


    <?php require "assets/footer.php" ?>
    
</body>
</html>