<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
        $tableauDeVoyelle = ['a', 'e', 'y', 'u', 'i', 'o', 'A', 'E', 'Y', 'U', 'I', 'O'];

        $nbrConsonne = 0;
        $nbrVoyelle = 0;

        $i = 0;

        while (isset($str[$i])){
            $voyelleBool = false;
            foreach ($tableauDeVoyelle as $voyelle)
            {
                if ($str[$i] == $voyelle)
                {
                    $nbrVoyelle++;
                    $voyelleBool = true;
                }
            }

            if (!$voyelleBool){
                
                if ($str[$i] != " " && $str[$i] != "'")
                {   
                    echo $str[$i];
                    $nbrConsonne++;
                }
            }

            $i++;
        }
    ?>

    <table>
        <thead>
            <tr>
                <th>Consonnes</th>
                <th>Voyelles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nbrConsonne ?></td>
                <td><?php echo $nbrVoyelle ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>