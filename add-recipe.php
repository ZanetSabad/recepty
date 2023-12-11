<?php 

    require "assets/db.php";
    require "assets/fce-recipe.php";

    $connection = connectionDB();

    $name = null;
    $weight = null;
    $basis = null;
    $weight1 = null;
    $basis1 = null;
    $weight2 = null;
    $basis2 = null;
    $weight3 = null;
    $basis3 = null;
    $weight4 = null;
    $basis4 = null;
    $weight5 = null;
    $basis5 = null;
    $method = null;
    

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $name = $_POST["name"];
        $weight = $_POST["weight"];
        $basis = $_POST["basis"];
        $weight1 = $_POST["weight1"];
        $basis1 = $_POST["basis1"];
        $weight2 = $_POST["weight2"];
        $basis2 = $_POST["basis2"];
        $weight3 = $_POST["weight3"];
        $basis3 = $_POST["basis3"];
        $weight4 = $_POST["weight4"];
        $basis4 = $_POST["basis4"];
        $weight5 = $_POST["weight5"];
        $basis5 = $_POST["basis5"];
        $method = $_POST["method"];

        addRecipe($connection, $name, $weight, $basis, $weight1, $basis1, $weight2, $basis2, $weight3, $basis3, $weight4, $basis4, $weight5, $basis5, $method);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Document</title>
</head>
<body>

    <section class="form-add">
        <?php require "assets/form.php" ?>
    </section>

</body>
</html>