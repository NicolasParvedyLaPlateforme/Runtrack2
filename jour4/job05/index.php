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
            <label for="name">Entrer votre mot de passe: </label>
            <input type="password" name="password" id="password" required />
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
            if (isset($_POST['name']) && isset($_POST['password'])){
                if ($_POST['name'] == "John" && $_POST['password'] == 'Rambo'){
                    echo "<p>C'est pas ma guerre</p>";
                }else {
                    echo "<p>Votre pire cauchemar</p>";
                }
            }
        }
    ?>
</body>
</html>