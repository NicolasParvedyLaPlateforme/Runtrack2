<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //variable de chaine de caractère
        $str = "I'm sorry Dave I'm afraid I can't do that";

        //Je crée un tableau de voyelle qui contient les minuscule et majuscule
        $tableauDeVoyelle = ['a', 'e', 'y', 'u', 'i', 'o', 'A', 'E', 'Y', 'U', 'I', 'O'];

        $i = 0;

        //Je vérifie chaque caractère de ma chaîne de caractère et je vérifie si elle correspond à une voyelle 
        while (isset($str[$i])){
            foreach ($tableauDeVoyelle as $voyelle)
            {
                if ($str[$i] == $voyelle)
                {
                    echo $str[$i] ;
                }
            }

            $i++;
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