<?php include '../../head.php'; ?>

<?php 
    session_start();

    if (isset($_POST['cancel'])){
        session_destroy();
        header('Refresh: 0');
    }

    //Tout les combi possible, on a associes à une valeur vide car on veut le rendre tableau associatif est utilisé la clé 
    $possibleCombi = [
        ['0_0' => "", '0_1' => "", '0_2' => ""], 
        ['1_0' => "", '1_1' => "", '1_2' => ""],
        ['2_0' => "", '2_1' => "", '2_2' => ""],
        ['0_0' => "", '1_0' => "", '2_0' => ""],
        ['0_1' => "", '1_1' => "", '2_1' => ""],
        ['0_2' => "", '1_2' => "", '2_2' => ""],
        ['0_0' => "", '1_1' => "", '2_2' => ""],
        ['0_2' => "", '1_1' => "", '2_0' => ""],
    ];

    //Je crée mon tableau de valeur si il n'existe pas
    if (!isset($_SESSION['game'])){
        
        $_SESSION['end'] = false;
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
    if (!$_SESSION['end']){
        foreach($_POST as $key => $value){
            if ($key != "cancel" && $_SESSION['game'][$key] == ''){
                $_SESSION['game'][$key] = $turn;
            }else {
                echo "Cette case est déjà prise <br>";
            }
        }
    }
    

    //On vérifie l'ensemble des possibilité
    foreach ($possibleCombi as $combi){
        $player = "";
        //si i vaut 0 donc joueur x sinon O
        for ($i = 0; $i < 2; $i++){
            $compteur = 0;

            if ($i == 0){
                $player = "X";
            }else {
                $player = "O";
            }

            //On vérifie si la la clé existe dans le combo actuel si c'est le cas alors on vérifie si c'est le jouer X ou O et on compte
            foreach ($_SESSION['game'] as $key => $value){
                if (isset($combi[$key]))
                {
                    if ($_SESSION['game'][$key] == $player){
                        $compteur++;
                    }
                }
                
            }

            //Au bout de 3 dans le compteur alors ça veut dire qu'il y a une combinaison de X ou O et donc un joueur à gagné et fin de la partie
            if ($compteur == 3){
                echo "<p>Le joueur $player a gagné, fin de la partie.</p>";
                $_SESSION['end'] = true;
                break;
            }
            
        }
    }

    //Dernière vérification si toutes les cases sont coché 
    $free = false;
    foreach($_SESSION['game'] as $case){
        if ($case == ""){
            $free = true;
        }
    }

    //si aucune case n'est libre c'est donc match nul
    if (!$free)
    {
        $_SESSION['end'] = true;
        echo "<p>Fin de la partie, aucun des joueurs n'a gagné, c'est donc un match nul !";
    }   
    
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