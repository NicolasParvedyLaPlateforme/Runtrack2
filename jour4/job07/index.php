<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="form-example" style="margin-bottom:100px;">
        <div class="form-example">
            <label for="name">Hauteur : </label>
            <input type="number" name="hauteur" id="hauteur" required />
        </div>
        <div class="form-example">
            <label for="name">Longueur : </label>
            <input type="number" name="longueur" id="longueur" required />
        </div>
        <div class="form-example">
            <input type="submit" value="dessine" />
        </div>
    </form>
    <?php
        if (isset($_POST['hauteur']) && isset($_POST['longueur']))
        {
            $longueur = $_POST['longueur'] / $_POST['hauteur'];
            for ($h = 0; $h < $_POST['hauteur']; $h++)
            {
                for ($l = $_POST['hauteur']-$h; $l > 0; $l--)
                {
                    echo "<span style='color:white';>_</span>";
                }

                echo "/";

                for ($l = 0; $l < $h * $longueur; $l++)
                {
                    echo "_";
                }

                echo "\\";
                echo "<br>";
            }

            for ($h = 0; $h < $_POST['hauteur']; $h++)
            {
                echo "<span style='color:white';>_</span>";
                echo "|";

                if ($h+1 == $_POST['hauteur'])
                {
                    for ($l = 0; $l < $_POST['longueur']-2; $l++)
                    {
                        echo "_";
                    }
                }else {
                    for ($l = 0; $l < $_POST['longueur']-2; $l++)
                    {
                        echo "<span style='color:white';>_</span>";
                    }
                }
                

                echo "|";
                
                echo "<br>";
            }
            
        }
    ?>
</body>
</html>