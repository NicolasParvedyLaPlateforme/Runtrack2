<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
        // (<br />).
        // Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25 et 50 : souligner.
        // Afficher “La Plateforme_” à la place de 42.

        
            
        //Parcourir entre 0 à 100
        for($i = 0; $i <= 100; $i++)
        {
            //Si le nombre est entre 0 et 20 
            if ($i <= 20){
                //Alors affiche le nombre en italique
                echo "<i>$i</i><br>";
            //Sinon Si le nombre est compris entre 25 et 50
            }else if ($i >= 25 && $i <= 50)
            {
                //SI le nombre vaut 42 
                if ($i == 42)
                {
                    //Alors écrit LaPlateforme_
                    echo "La plateforme_<br>";
                //SINON
                }else {
                    //Alors affiche le nombre en souligner
                    echo "<u>$i</u><br>";
                }
            //SINON 
            }else {
                //Alors affiche les restes des nombres
                echo $i . "<br>";
            }
        }
    ?>
</body>
</html>