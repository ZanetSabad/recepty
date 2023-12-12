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
        <form method="POST">
            <input type="text" 
                    placeholder="Název receptu" 
                    name="name" 
                    value = "<?= htmlspecialchars ($name) ?>"
                    required
            > <br>
            <input type="number" 
                    placeholder="g"
                    name="weight"
                    value = "<?= htmlspecialchars ($weight)?>" 
            >
            <input type="text" 
                    placeholder="Ingredience: " 
                    name="basis"
                    value = "<?= htmlspecialchars ($basis)?>"        
            >
            <input type="number" 
                    placeholder="g" 
                    name="weight1"
                    value = "<?= htmlspecialchars ($weight1)?>" 
            >
            <input type="text" 
                    placeholder="Ingredience: " 
                    name="basis1"
                    value = "<?= htmlspecialchars ($basis1)?>"  
            ><br>
            <input type="number" 
                    placeholder="g" 
                    name="weight2"
                    value = "<?= htmlspecialchars ($weight2)?>" 
            >
            <input type="text" 
                    placeholder="Ingredience: " 
                    name="basis2"
                    value = "<?= htmlspecialchars ($basis2)?>"  
            >
            <input type="number" 
                    placeholder="g" 
                    name="weight3"
                    value = "<?= htmlspecialchars ($weight3)?>" 
            >
            <input type="text" 
                    placeholder="Ingredience: " 
                    name="basis3"
                    value = "<?= htmlspecialchars ($basis3)?>"  
            ><br>
            <input type="number" 
                    placeholder="g" 
                    name="weight4"
                    value = "<?= htmlspecialchars ($weight4)?>" 
            >
            <input type="text" 
                    placeholder="Ingredience: " 
                    name="basis4"
                    value = "<?= htmlspecialchars ($basis4)?>"  
            > 
            <input type="number" 
                    placeholder="g" 
                    name="weight5"
                    value = "<?= htmlspecialchars ($weight5)?>" 
            > 
            <input type="text" 
                    placeholder="Ingredience: " 
                    name="basis5"
                    value = "<?= htmlspecialchars ($basis5)?>"  
            ><br>
            <textarea type="text" 
                        placeholder="Postup: " 
                        name="method"></textarea><br>
            <button>Přidat</button>
        </form>    
    </section>

</body>
</html>