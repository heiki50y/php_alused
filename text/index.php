<?php
/**
 * Created by PhpStorm.
 * User: heiki.kotsar
 * Date: 22.01.2019
 * Time: 10:54
 */

$tekst = 'Life is about ingnoring the drama.';

    echo strtolower($tekst);
    echo '<br>';
    echo strtoupper($tekst);
    echo '<br>';

$tekst = 'Life is about ingnoring the drama.';
    echo ucfirst(strtolower($tekst));
    echo '<br>';


$tekst = 'Experience is the teacher of fools';
echo strlen($tekst);
echo '<br>';
echo str_word_count($tekst);