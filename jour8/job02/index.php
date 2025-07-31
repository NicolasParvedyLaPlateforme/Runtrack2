<?php include '../../head.php'; ?>

<?php 
    session_start();
    $nbVisites = 0;
    if (isset($_COOKIE['nbvisites']))
    {
        $nbVisites = $_COOKIE['nbvisites'] + 1;
        setcookie('nbvisites', $nbVisites, time() + (86400 * 30), "/"); 
    }else {
        setcookie('nbvisites', 1, time() + (86400 * 30), "/"); 
    }

    echo "le site a été visité : " . $_COOKIE['nbvisites'] . "<br>";

    if (isset($_POST['reset'])){
        setcookie('nbvisites', 1, time() + (86400 * 30), "/"); 
        //on fait un refresh pour bien supprimer les données du form
        header('Refresh:0');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" style="margin-top:20px;">
        <input type="text" name="reset" style="visibility:hidden;width:0;" value="reset">
        <input type="submit" value="Reset">
    </form>
</body>
</html>

<?php include '../../foot.php'; ?>

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