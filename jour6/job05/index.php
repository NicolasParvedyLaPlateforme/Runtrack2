<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php 
        if (isset($_POST['color']))
        {
            $color = $_POST['color'];
            echo "<link rel='stylesheet' href='$color.css'>";
        }else {
            echo "<link rel='stylesheet' href='dark.css'>";
        }
    ?>
</head>
<body>
    
    <form action="" method="post">
        <select name="color">
            <option value="blue" 
            <?php if (isset($_POST['color'])) {
                echo $_POST['color'] == 'blue' ? 'selected': '';
            }
            ?>>blue</option>
            <option value="red"
            <?php 
                if (isset($_POST['color'])) {
                    echo $_POST['color'] == 'red' ? 'selected': '';
                }
            ?>
            >red</option>
            <option value="dark"
            <?php 
                if (isset($_POST['color'])) {
                    echo $_POST['color'] == 'dark' ? 'selected': '';
                }
            ?>
            >dark</option>
        </select>

        <button type="submit">Valider la color du form</button>
    </form>

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