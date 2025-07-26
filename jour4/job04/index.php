<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="form-example">
        <div class="form-example">
            <label for="name">Enter your name: </label>
            <input type="text" name="name" id="name" required />
        </div>
        <div class="form-example">
            <label for="name">Enter your firstname: </label>
            <input type="text" name="firstname" id="firstname" required />
        </div>
        <div class="form-example">
            <input type="submit" value="Subscribe!" />
        </div>
    </form>

    
    <?php
        $count = 0;
        //on vérifie d'abord si le formulaire à bien été envoyé et qu'il contient des valeurs à afficher
        foreach($_POST as $post)
        {
            $count++;
        }

        if ($count != 0)
        {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>Argument</th>
                            <th>Valeur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //on boucle pour chaque information dans le get en récupérant sa clé et valeur à afficher dans un tableau
                            foreach($_POST as $key => $value){
                                //Ouverture du row
                                echo "<tr>";
                                //on affiche d'abord la clé
                                echo "<td>" . $key . "</td>";
                                //on affiche ensuite sa valeur
                                echo "<td>" . $value . "</td>";
                                //fermeture du row
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            <?php
        }
    ?>
</body>
</html>