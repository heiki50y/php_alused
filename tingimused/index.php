<?php
// tingimused
// if tingimus
// tegevused mis toimuvad kui tingimused kehtivad
// else
// tegevused, mis toimuvad kui tingimus ei kehti

echo '<h4>Tingimused</h4>';
/*
$arv = rand(0,100);
$varv = '';

if ($arv > 0 and $arv <25){
    $varv = 'green';

} else if ($arv > 25 and $arv < 50) {
    $varv = 'blue';
} else if ($arv >= 50 and $arv < 75) {
    $varv = 'red';
} else if ($arv >= 75 and $arv < 101) {
    $varv = 'pink';
}
echo '<p style="color: '.$varv.' ">'.$arv.'</p>';
*/

$foor = 'sinine';
switch ($foor){
    case 'punane';
        echo '<p style="color: red">punane!</p>';
        break;
    case 'kollane';
        echo '<p style="color: yellow">kollane!</p>';
        break;
    case 'roheline';
        echo '<p style="color: green">green!</p>';
        break;
    default:
        echo '<p>Mingi teine!</p>';
        break;
}