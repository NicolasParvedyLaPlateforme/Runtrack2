<?php

$str = "je suis une chaine de caractère";
$int = 5;
$bool = false;
$float = 5.5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        td{
            border:1px solid black;
        }
    </style>
    <table>
        <thead>
            <tr>
                <td>Type</td>
                <td>Nom</td>
                <td>Valeur</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo gettype($str); ?></td>
                <td>str</td>
                <td><?php echo $str ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($int); ?></td>
                <td>int</td>
                <td><?php echo $int ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($bool); ?></td>
                <td>bool</td>
                <td><?php echo $bool ? "true": "false" ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($float); ?></td>
                <td>float</td>
                <td><?php echo $float ?></td>
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