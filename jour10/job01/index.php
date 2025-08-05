<?php
    //connexion à la base de donnée
    $mysqli = new mysqli("localhost", "root", "", "jour9");
    //On fait notre requête sql
    $result = mysqli_query($mysqli, "SELECT * FROM etudiants");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td,th {
        width:200px;
        text-align:center;
        border:1px solid black;
    }
</style>

<body>
    <table>
        <thead>
            <tr>
                <?php 
                    //While jusqu'à ce que fetch_field renvoie false
                    while ($info_colonne = $result->fetch_field()):
                        if ($info_colonne->name != "id"):
                            echo "<th>" . $info_colonne->name . "</th>";
                        endif;
                    endwhile;
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                //On boucle jusqu'à qu'on est une nouvelle valeur
                for ($i = 0; $i < $result->num_rows; $i++):
                    $row = $result->fetch_assoc();

                    echo "<tr>";

                    foreach($row as $key => $value):
                        if ($key != "id"): 
                            echo "<td>" . $value . "</td>";
                        endif;
                    endforeach;

                    echo "</tr>";
                endfor;
            ?>
            
        </tbody>
    </table>
</body>
</html>