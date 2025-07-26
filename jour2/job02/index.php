<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
        //mettant un retour à la ligne entre chaque nombre (<br />).

        //Parcourir de 0 jusqu'à 1337 inclus
        //  Si le nombre est 26 ou 37 ou 88 ou 1111
        //      Alors passe à la prochaine itération
        //  Sinon 
        //      Afficher le résultat avec un retour à la ligne

        for($i = 0; $i <= 1337; $i++)
        {
            if ($i == 26 || $i == 37 || $i == 88 || $i == 1111)
            {
                continue;
            }else {
                echo $i . "<br>";
            }
        }
    ?>
</body>
</html>