<?php 

    require "assets/db.php";
    require "assets/fce-recipe.php";

    $connection = connectionDB();

    if(isset ($_GET["id"]) and is_numeric($_GET["id"])) {
        $one_recipe = getRecipe($connection, $_GET["id"]);

        if($one_recipe) {
            $name = $one_recipe["name"];
            $weight = $one_recipe["weight"];
            $basis = $one_recipe["basis"];
            $weight1 = $one_recipe["weight1"];
            $basis1 = $one_recipe["basis1"];
            $weight2 = $one_recipe["weight2"];
            $basis2 = $one_recipe["basis2"];
            $weight3 = $one_recipe["weight3"];
            $basis3 = $one_recipe["basis3"];
            $weight4 = $one_recipe["weight4"];
            $basis4 = $one_recipe["basis4"];
            $weight5 = $one_recipe["weight5"];
            $basis5 = $one_recipe["basis5"];
            $method = $one_recipe["method"];
            $id = $one_recipe["id"];
        } else {
            die("Recept nenalezen");
        }
       

    } else {
        die("ID není zadáno, recept nenalezen");
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
    <title>Document</title>
</head>
<body>
    <?php require "assets/header.php" ?>

    <section>
        <?php require "assets/form.php" ?>
    </section>    

    <?php require "assets/footer.php" ?>
    
</body>
</html>