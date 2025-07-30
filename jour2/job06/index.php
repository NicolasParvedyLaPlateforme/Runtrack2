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