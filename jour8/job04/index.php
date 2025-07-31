<?php include '../../head.php'; ?>

<?php 
    $user_connected = false;
    if (isset($_POST['prenom'])){
        setcookie('prenom', $_POST['prenom'], time() + (86400 * 30), "/"); 
        header('Refresh:0');
    }


    if (isset($_COOKIE['prenom'])){
        $user_connected = true;
    }

    if (isset($_POST['disconnect'])){
        setcookie("prenom", "", time() - 3600, "/");
        header('Refresh:0');
    }
?>
<?php if (!$user_connected): ?>
<form action="" method="post">
    <input type="text" name="prenom" id="">
    <button type="submit">Connexion</button>
</form>
<?php else: ?>
<p>Bonjour <?= $_COOKIE['prenom']; ?>
<form action="" method="post">
    <input type="text" name="disconnect" style="visibility: hidden;width:0;">
    <button type="submit">Deconnexion</button>
</form>

<?php endif ?>

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