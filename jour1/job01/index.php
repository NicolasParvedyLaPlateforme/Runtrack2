<?php 

$str = "LaPlateforme";

echo $str;

$str2 = "Vive";
$str3 = "!";

echo "<p>" .$str2 . $str . $str3 . "</p>";

$val = 6;

echo "<p> $val </p>";

$val = $val + 4;

echo "<p> $val </p>";

$myBool = true;

echo $myBool;

$myBool = false;

echo "<p>$myBool</p>";

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