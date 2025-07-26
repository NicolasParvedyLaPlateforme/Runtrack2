<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
        // à la ligne entre chaque nombre (“<br />”).

        //Parcourir de 1 jusqu'à 1000
            //Parcourir une nouvelle fois de 1 à 1000 
                //Je divise ma valeur ($i) de ma première boucle par la valeur ($a) de ma deuxième boucle
                //Je vérifie si la valeur est un entier et pas un décimal
                //Je compte chaque fois qu'il est divisé
            //Si il est divisible seulement 2 fois alors j'affiche le nombre
            //Je repasse à zéro le compteur



















        $nbDivide = 0;

        for($i = 0; $i <= 1000; $i++)
        {
            for ($a = 1; $a <= 1000; $a++)
            {
                if ($i % $a == 0)
                {
                    $nbDivide++;
                }
            }

            if ($nbDivide <= 2)
            {
                echo $i . "<br>";
            }

            $nbDivide = 0;
        }

























    // $listNumb = [1,2,3,4,5,6,7,8,9];

    // for ($i = 0; $i <= 1000; $i++)
    // {
    //     $countTimeToGetDivide = 0;

    //     foreach($listNumb as $value)
    //     {
    //         if ($i == $value)
    //         {
    //             $countTimeToGetDivide++;
    //         }else {
    //             // echo "type est " .gettype($i / $value) . '<br>';
    //             if ($i % $value == 0)
    //             {
    //                 $countTimeToGetDivide++;
    //             }

    //         }
    //     }

    //     // echo $countTimeToGetDivide . "<br>";

    //     if ($i >= 10)
    //     {
    //         //On rajoute un pour tous ceux qui sont au dessus de 10
    //         $countTimeToGetDivide++;
    //     }

    //     if ($countTimeToGetDivide <= 2)
    //     {
    //         echo "$i <br>";
    //     }

    //     // echo "i : $i , count : $countTimeToGetDivide <br>";
    // }

    ?>
</body>
</html>