<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hauteur = 20;

        for ($i = 0; $i < $hauteur; $i++)
        {
            for($b = $hauteur-$i; $b > 0; $b--)
            {
                echo "<span style='color:white;'>_</span>";
            }
            

            echo "/";

            for ($a = 0; $a < $i*2; $a++)
            {
                echo "<span style='color:white;'>_</span>";
            }

            echo "\\";

            echo "<br>";
        }

        for ($i = 0; $i < $hauteur*2; $i++)
        {
            echo "_";
        }
    ?>
</body>
</html>