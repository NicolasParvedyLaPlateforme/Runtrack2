<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="form-example">
        <div class="form-example">
            <label for="name">Enter your name: </label>
            <input type="number" name="nombre" id="nombre" required />
        </div>
        <div class="form-example">
            <input type="submit" value="pair or impair" />
        </div>
    </form>

    
    <?php
        if (isset($_POST['nombre'])){
            if ($_POST['nombre'] % 2 == 0){
                echo "<p>Le nobmre est pair</p>";
            }else {
            echo "<p>Le nombre est impair</p>";
            }
        }

        ?>
</body>
</html>