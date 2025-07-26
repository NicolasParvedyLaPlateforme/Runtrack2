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