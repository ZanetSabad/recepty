<?php 

    require "assets/db.php";
    require "assets/fce-recipe.php";

    $connection = connectionDB();

    // smazání 
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        deleteRecipe($connection, $_GET["id"]);
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
    <link rel="stylesheet" href="css/form.css">
    <title>Smazání receptu</title>
</head>
<body>
    <?php require "assets/header.php" ?>

    <section>
        <form method="POST">
            <p>Jste si jisti, že chcete Recept smazat?</p>
            <button>SMAZAT</button>
            <!-- <a href="one-recipe.php">Zpět na seznam receptů</a> -->
            <a href="one-recipe.php?id=<?=$_GET["id"]?>">Zrušit</a>
        </form>
    </section>

    <?php require "assets/footer.php" ?>
</body>
</html>