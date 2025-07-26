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