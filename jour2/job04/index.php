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