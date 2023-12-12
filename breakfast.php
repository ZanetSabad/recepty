<?php

    require "assets/db.php";
    require "assets/fce-recipe.php";

    $connection = connectionDB();

    $one_recipe = getAllRecipe($connection, "id, name");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Snídaně</title>
</head>
<body>
    <?php require "assets/header.php" ?>

    <main>
        <section class="main-heading">
            <h1>Snídaně</h1>
        </section>
        <section class="individually-recipe-list-">
            <?php if(empty($one_recipe)): ?>
                <p>Žádný recept nebyl nalezen</p>
            <?php else: ?>
                <ul>
                <?php foreach($one_recipe as $one_recipe) :?>
                    <li>
                        <a href="one-recipe.php?id=<?= $one_recipe['id'] ?>"> <?= $one_recipe["name"] ?></a>
                    </li>                   
                <?php endforeach ?>  
                </ul>
            <?php endif ?>                    
        </section> 
        <section>
			<a href="index.php">Zpět na úvodní stránku</a>
		</section>      
    </main>   

    <?php require "assets/footer.php" ?>
</body>
</html>