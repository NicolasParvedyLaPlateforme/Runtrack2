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
            <input type="text" name="nombre" id="nombre"/>
        </div>
        <div class="form-example">
            <input type="submit" value="pair or impair" />
        </div>
    </form>

    
    <?php
        if (isset($_POST['nombre']) ){
            try {
                if ((int)$_POST['nombre'] % 2 == 0){
                    echo "<p>Le nombre est pair</p>";
                }else {
                    echo "<p>Le nombre est impair</p>";
                }
            }catch (Exception $e){
                echo "Veuillez renseigner un nombre";
            }
            
        }

        ?>

    <details style="margin-top:30px;">
        <summary style="cursor:pointer">afficher le code de la page :</summary>
        <div style="background-color:#FAEBD7;color:white;padding:2px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <div style="background-color:#F0FFFF;padding:20px;">
                <?php
                    highlight_file(__FILE__);
                ?>
            </div>
        
        </div>
    </details>
</body>
</html>