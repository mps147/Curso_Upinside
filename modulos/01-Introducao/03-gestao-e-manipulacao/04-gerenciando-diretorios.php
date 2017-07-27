<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

function checkDir($Dir) {
    if (file_exists($Dir) && is_dir($Dir)):
        return true;
    else:
        return false;
    endif;
}

$getDir = getcwd();
$setDir = "{$getDir}/04";
echo "{$getDir}<hr>";

if (!checkDir($setDir)):
    mkdir($setDir, 0777);
endif;

//if(checkDir($setDir)):
//    rmdir($setDir);
//endif;
//rename($setDir, "{$getDir}/uploads");
//rename("{$getDir}/05", "{$setDir}/05");

chdir($setDir);
echo getcwd();
echo "<hr>";

$newDir = getcwd();
$openDir = opendir($newDir);
while ($File = readdir($openDir)):
    if ($File != '.' && $File != '..'):
        echo "<img src='04/{$File}' width='150'/><br>";
        echo "{$File}<br>";
    endif;
endwhile;
echo "<hr>";

echo str_repeat("<br>", 40);
