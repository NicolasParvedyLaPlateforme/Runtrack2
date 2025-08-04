<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Les choses que l'on possède finissent par nous posséder.";

        $tableauAccent = ['é', 'è'];

        $i = 0; 

        //Je compte le nombre de caractère et je fais i-- pour annuler le ++ de la dernière itération
        while (isset($str[$i]))
        {
            $i++;
        }
        
        $i--;

        //Je boucle jusqu'à parcourir toutes les lettres de droite à gauche
        while ($i != -1){
            $yesAccent = false;

            //On vérifie chaque à chaque fois si la lettre précédente et celle actuel équivaut à un accent, si c'est le cas alors on dit que le prochain est un accent et on saute la prochaine itération car un accent équivaut à 2 caractères
            if (isset($str[$i]))
            {
                foreach($tableauAccent as $accent)
                {
                    if ($str[$i-1] . $str[$i] == $accent && !$yesAccent)
                    {
                        //On affiche l'accent 
                        echo $str[$i-1] . $str[$i];
                        $yesAccent = true;
                        $i--;
                    }

                }

                //on affiche notre caractères si ce n'est pas un accent
                if (!$yesAccent)
                {
                    echo $str[$i];
                }
            }

            $i--;
        }

        // echo $result;
        

        // echo "<br>";

        // while ($i != -1)
        // {
        //     echo $str[$i];
        //     $i--;
        // }
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