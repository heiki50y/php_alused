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
echo '<table>';
for($rida = 1; $rida <= 5; $rida++){
    echo '<tr>';
    for($veerg = 1; $veerg <= 5; $veerg++) {
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