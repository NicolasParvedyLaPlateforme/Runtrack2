<?php 
    include '../../head.php';
?>

<?php 
    function leetSpeak($str){
        $i = 0;
        $newStr = "";
        while(isset($str[$i])){
            switch ($str[$i]){
                case $str[$i] == "A" || $str[$i] == "a" :
                    $newStr = $newStr . 4;
                    break;
                case $str[$i] == "B" || $str[$i] == "b" :
                    $newStr = $newStr . 8;
                    break;
                case $str[$i] == "E" || $str[$i] == "E" :
                    $newStr = $newStr . 3;
                    break;
                case $str[$i] == "G" || $str[$i] == "g" :
                    $newStr = $newStr . 6;
                    break;
                case $str[$i] == "L" || $str[$i] == "l" :
                    $newStr = $newStr . 1;
                    break;
                case $str[$i] == "S" || $str[$i] == "s" :
                    $newStr = $newStr . 5;
                    break;
                case $str[$i] == "T" || $str[$i] == "t" :
                    $newStr = $newStr . 7;
                    break;
                default :
                    $newStr = $newStr . $str[$i];
                    break;
            }
            $i++;
        }

        return $newStr;
    }

    echo leetSpeak("Bonjour je m'appelle Nicolas, et toi tu t'appelle gerard ?");
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