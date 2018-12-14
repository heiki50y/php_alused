<?php
// for
// for ($jm = alg; $jm < loop; $jm++
// tegevused, mis sooritatakse
// nii kaua kui tsükli $jm
// väärtus on väiksem kui lõppväärtus
header('Refresh: 1');
echo '<h4>Tsüklid -for</h4>';
/*
$varv = '';
for($arv = 1; $arv <= 10; $arv++) {
    if ($arv % 2 == 0) {
        $varv ='green';
    } else {
        $varv = 'red';
    }
    echo '<div style="color: '.$varv.'">'.$varv.'</div>';
}
*/
/*
echo '<table>';
for($arv = 1; $arv <= 5; $arv++){
    echo '<tr>';
    for($arv2 = 1; $arv2 <= 5; $arv2++) {
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0,15));
        }
        echo '<td style="background: ' . $varv . '">';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
*/

echo '</table>';
echo '<hr>';
// korrutustabel
echo '<table style="border-collapse: collapse">';
// ülemine punane riba
for($arv2 = 0; $arv2 <= 10; $arv2++){
    /* if($arv2 == 0){
         $txt = '&nbsp;';
     } else {
         $txt = $arv2;
     }*/
    $txt = ($arv2 == 0) ? '&nbsp;' : $arv2;
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightgreen">';
    echo $txt;
    echo '</th>';
}
// põhitabel
for($arv1 = 1; $arv1 <= 10; $arv1++){
    echo '<tr>'; // rea algus
    // üks punane kast
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightcoral">';
    echo $arv1;
    echo '</th>';
    // korrutustabeli elemendid - korrutamise tulemused
    for($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo '<td style="width: 20px; text-align: center; border: solid 1px black;">';
        echo $arv1 * $arv2;
        echo '</td>';
    }
    echo '</tr>'; // rea lõpp
}
echo '</table>'; // tabeli lõpp

echo '<hr>';

$arv  = 123;
$numbriteSumma = 0;
while ($arv != 0) {
    $number = $arv % 10;
    echo 'Number = '.$number.'<br>';
    $arv = $arv / 10;
    settype($arv, 'int');
    echo 'Uus arv on '.$arv. '<br>';
    $numbriteSumma = $numbriteSumma + $number;
    echo 'Hetkel summa = '.$numbriteSumma. '<br>';
}
echo '<b>Lõplik summa = '.$numbriteSumma.'<br></br>';

echo '<hr>';

$arv = 442158755745;
// leia mitu korda siin esinemas 5;
$numberkokku = 0;
while ($arv !=0) {
    $number = $arv % 10;
    if ($number == 5) {
        $numberkokku = $numberkokku + 1;
    }
    $arv = $arv / 10;
    settype($arv, 'int');
}
echo 'Number 5 esineb antud arvus '.$numberkokku.' korda<br>';






