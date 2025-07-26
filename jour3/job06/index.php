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

        while (isset($str[$i]))
        {
            $i++;
        }

        $i--;

        while ($i != -1){
            $yesAccent = false;

            if (isset($str[$i]))
            {
                foreach($tableauAccent as $accent)
                {
                    if ($str[$i-1] . $str[$i] == $accent && !$yesAccent)
                    {
                        echo $str[$i-1] . $str[$i];
                        $yesAccent = true;
                        $i--;
                    }

                }

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
</body>
</html>