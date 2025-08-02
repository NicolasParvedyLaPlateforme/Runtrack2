<?php include '../../head.php'; ?>

<?php 
    session_start();

    if (isset($_POST['cancel'])){
        session_destroy();
        header('Refresh: 0');
    }

    //Je crée mon tableau de valeur si il n'existe pas
    if (!isset($_SESSION['game'])){
        $_SESSION['game'] = ['0_0' => '', '0_1' => '','0_2' => '','1_0' => '','1_1' => '','1_2' => '','2_0' => '','2_1' => '','2_2' => ''];
    }

    //Je crée le tour de l'utilisation en commençant par vrai, si l'autre user alors faux et ainsi de suite
    if (!isset($_SESSION['turn'])){
        $_SESSION['turn'] = true;
    }else {
        $_SESSION['turn'] = $_SESSION['turn'] ? false : true;
    }

    //En fonction du tour (true or false) j'assigne X ou O
    $turn = $_SESSION['turn'] ? "X" : "O";

    //je boucle mon post pour obtenir ma clé et bien sur différent du bouton de recommencer ou de résultat vide
    foreach($_POST as $key => $value){
        if ($key != "cancel" && $_SESSION['game'][$key] == ''){
            $_SESSION['game'][$key] = $turn;
        }else {
            echo "Cette case est déjà prise <br>";
        }
    }

    //Dès que 3 croix, ou 3 rond ou qu'il ne soit plus possible de gagner alors afficher le résultat
    
    
    
    //Tour du joueur actuel
    
?>
<style>
    .case {
        width:100px;
        height:100px;
        font-size:80Px;
    }
</style>

<form action="" method="post">
    <table>
        <tr>
            <td><button name="0_0" type="submit" class="case"><?= $_SESSION['game']['0_0']; ?></td>
            <td><button name="0_1" type="submit" class="case"><?= $_SESSION['game']['0_1']; ?></td>
            <td><button name="0_2" type="submit" class="case"><?= $_SESSION['game']['0_2']; ?></td>
        </tr>
        <tr>
            <td><button name="1_0" type="submit" class="case"><?= $_SESSION['game']['1_0']; ?></td>
            <td><button name="1_1" type="submit" class="case"><?= $_SESSION['game']['1_1']; ?></td>
            <td><button name="1_2" type="submit" class="case"><?= $_SESSION['game']['1_2']; ?></td>
        </tr>
        <tr>
            <td><button name="2_0" type="submit" class="case"><?= $_SESSION['game']['2_0']; ?></td>
            <td><button name="2_1" type="submit" class="case"><?= $_SESSION['game']['2_1']; ?></td>
            <td><button name="2_2" type="submit" class="case"><?= $_SESSION['game']['2_2']; ?></td>
        </tr>
    </table>

    <button name="cancel" type="submit" >recommencer la partie</button>
</form>

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