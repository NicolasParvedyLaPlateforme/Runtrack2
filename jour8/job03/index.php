<?php include '../../head.php';?>

<?php 

session_start();

if (isset($_POST['prenom'])){
    $_SESSION['prenoms'][] = $_POST['prenom'];
    
    header('Refresh:0');
}

if (isset($_POST['reset'])){
    $_SESSION['prenoms'] = null;
    
    header('Refresh:0');
}

?>

<div style="display:flex;">
    <form action="" method="post">
        <input type="text" name="prenom" id="" placeholder="prenom">
        <button type="submit">Envoyer</button>
    </form>

    <form action="" method="post">
        <input type="text" name="reset" id="" style="visibility: hidden;width:0;">
        <button type="submit">Reset</button>
    </form>
</div>

<?php 
    
    if (isset($_SESSION['prenoms'])){
        echo "<ul>";
        foreach($_SESSION['prenoms'] as $prenom){
            echo "<li>$prenom</li>";
        }
        echo "</ul>";
    }

?>

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

