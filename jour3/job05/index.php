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

        //Je boucle jusqu'à la dernière lettre
        while (isset($str[$i])){
            $voyelleBool = false;
            //Je vérifie si elle est une voyelle et je compte à chaque fois que je tombe sur une voyelle
            foreach ($tableauDeVoyelle as $voyelle)
            {
                if ($str[$i] == $voyelle)
                {
                    $nbrVoyelle++;
                    $voyelleBool = true;
                }
            }

            //Si ce n'est jamais tombé sur une voyelle et que ce n'est pas un " " ou ' alors je le compte comme une consonne
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