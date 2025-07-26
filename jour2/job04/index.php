<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Parcourir de 1 à 100
            //Si le nombre est un multiple de 3
                //Alors affiche Fizz
            //Si le nombre est un multipe de 5
                //Alors affiche Buzz
            //Si ce n'est pas un multiple de 3 ou de 5 
                //Alors on affiche le nombre
            //Faire un retour à la ligne
            

        $isFizzOrBuzz = false;

        for ($i = 1; $i <= 100; $i++)
        {
            if ($i % 3 == 0){
                echo "Fizz";
                $isFizzOrBuzz = true;
            }
            
            if ($i % 5 == 0)
            {
                echo "Buzz";
                $isFizzOrBuzz = true;
            }

            if (!$isFizzOrBuzz)
            {
                echo $i;
            }

            $isFizzOrBuzz = false;
            echo "<br>";
        }
    ?>
</body>
</html>