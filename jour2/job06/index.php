<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        //j'assigne ma largeur et hauteur
        $largeur = 20;
        $hauteur = 10;

        //Je boucle for pour faire mon trait du haut
        echo "&nbsp;";
        for ($i = 0; $i <= $largeur; $i++)
        {
            echo "_";
        }

        //Un retour à la ligne
        echo "<br>";

        //Je boucle pour que chaque ligne j'ai mon côté gauche, espace et côté droit
        for ($i = 0; $i < $hauteur; $i++)
        {
            echo "|";
            

            if ($i == $hauteur-1){
                for ($i = 0; $i <= $largeur; $i++)
                {
                    echo "_";
                }
            }
            
            else {
                for ($a = 0; $a <= $largeur; $a++)
                {
                    echo "&nbsp;&nbsp";
                }
            }

            
            echo "|<br>";

            //Dès que j'arrive à la dernière ligne alors je remplace les espacce par des "_" pour faire ma ligne du bas
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