<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Je crée une variable qui contient une chaine de caractère
        $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

        //On boucle jusqu'à la dernière caractère et on saute une étiration sur 2
        for ($i = 0; isset($str[$i]); $i = $i+2){
            echo $str[$i];
            
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