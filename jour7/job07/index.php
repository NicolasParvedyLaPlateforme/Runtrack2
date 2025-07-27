<?php 
    include '../../head.php';
?>

<?php

function everyFirstLetterUppercase($str){
    $uppercaseAlphabet = ["A","Z","E","R","T","Y","U","I","O","P","Q","S","D","F","G","H","J","K","L","M","W","X","C","V","B","N"];
    $lowercaseAlphabet = ["a","z","e","r","t","y","u","i","o","p","q","s","d","f","g","h","j","k","l","m","w","x","c","v","b","n"];

    $newWord = true;
    $newStr = '';
    $i = 0;

    while(isset($str[$i]))
    {
        $key = 0;
        if ($newWord){
            foreach($lowercaseAlphabet as $letter){
                if ($letter == $str[$i])
                {
                    $newStr = $newStr . $uppercaseAlphabet[$key];
                    $key = 0;
                    $newWord = false;
                    break;
                }
                $key++;
            }

            if ($newWord)
            {
                $newStr = $newStr . $str[$i];
                $newWord = false;
            }

        }else {
            if ($str[$i] ==  " ")
            {
                $newWord = true;
                $newStr = $newStr . $str[$i];
            }else {
                $newStr = $newStr . $str[$i];
            }
        }

        $i++;
    }

    return $newStr;
}

function gras($str){
    $str = everyFirstLetterUppercase($str);
    return "<b>$str</b>";
}

function cesar($str, $decalage = 2){
    $alphabet = ['a','b','c','d','e','f','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v', 'w', 'x', 'y', 'z'];
    $countAlphabet = 0;

    while(isset($alphabet[$countAlphabet])){
        $countAlphabet++;
    }

    $i = 0;

    $newStr = '';

    while(isset($str[$i])){
        if ($str[$i] == " "){
            $newStr = $newStr . " ";
            $i++;
        }
        $nbrKey = 0;

        foreach($alphabet as $letter){
            if ($str[$i] == $letter){
                for($k = 0; $k < $decalage; $k++){
                    $nbrKey++;

                    if (!isset($alphabet[$nbrKey])){
                        $nbrKey = 0;
                    }
                }
                break;
            }else {
                $nbrKey++;
            }
        }

        $newStr = $newStr . $alphabet[$nbrKey];
        
        $i++;
    }

    return $newStr;
}

function plateforme($str){
    $newWord = true;
    $newStr = '';
    $count = 0;

    while(isset($str[$count])){
        if ($newWord){
            if ($str[$count] == " "){
                $newWord = false;
                $count--;
            }else {
                $newStr = $newStr . $str[$count];
            }
        }else {
            $twoLast = $str[$count-2] . $str[$count-1];

            if ($twoLast == "me" || $twoLast == "Me" || $twoLast == "ME" || $twoLast == 'mE'){
                $newStr = $newStr . '_ ';
            }else {
                $newStr = $newStr . ' ';
            }

            $newWord = true;
        }

        $count++;
    }

    $twoLast = $str[$count-2] . $str[$count-1];

    if ($twoLast == "me" || $twoLast == "Me" || $twoLast == "ME" || $twoLast == 'mE'){
        $newStr = $newStr . '_';
    }

    return $newStr;
    
}

if (isset($_POST['str']) && isset($_POST['fonction']))
{
    switch ($_POST['fonction']){
        case $_POST['fonction'] == "gras":
            echo gras($_POST['str']);
            break;
        case $_POST['fonction'] == "cesar":
            echo cesar($_POST['str']);
            break;
        case $_POST['fonction'] == "plateforme":
            echo plateforme($_POST['str']);
            break;
        default: 
            echo "erreur s'est produite";
    }
}

?>

<form action="" method="post">
    <input type="text" name="str" id="">
    <select name="fonction" id="">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <button type="submit">Submit</button>
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