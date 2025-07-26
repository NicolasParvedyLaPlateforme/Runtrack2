<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $largeur = 20;
        $hauteur = 10;

        for ($i = 0; $i <= $largeur; $i++)
        {
            echo "-";
        }

        echo "<br>";

        for ($i = 0; $i < $hauteur; $i++)
        {
            echo "|";
            for ($a = 0; $a <= $largeur-1; $a++)
            {
                echo "<span style=\"color:white\">-</span>";
            }
            echo "|<br>";
        }
        for ($i = 0; $i <= $largeur; $i++)
        {
            echo "-";
        }
    ?>
</body>
</html>