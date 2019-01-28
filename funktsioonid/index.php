<?php

function numbriKordumine($arv, $kontrollNumber) {

    echo 'Arv on ' . $arv . ' <br>';
    $numberkokku = 0;
    while ($arv !=0) {
        $number = $arv % 10;
        if ($number == $kontrollNumber) {
            $numberkokku = $numberkokku + 1;
        }
        $arv = $arv / 10;
        settype($arv, 'int');
    }
    echo 'Number '.$kontrollNumber.'esineb antud arvus ' . $numberkokku . 'korda<br>';
}

numbriKordumine(442158755745,  5);
/* commit */




