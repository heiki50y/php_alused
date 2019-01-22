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


$tekst = 'Life is about ingnoring the drama.';
echo strlen($tekst);
echo '<br>';
echo str_word_count($tekst);
echo '<br>';

$tekst = '  Life is about ingnoring the drama.   ';
    echo "<pre> $tekst </pre>";
    echo "<pre>".trim($tekst)."</pre>";
    echo "<pre>".ltrim($tekst)."</pre>";
    echo "<pre>".rtrim($tekst)."</pre>";
echo '<br>';
$tekst = 'A woman should soften but not weaken a man';
echo trim($tekst, "A, a, k..n, w");
echo '<br>';
$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst);
echo '<br>';
$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst, '<b>, <br>');

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$tekst = 'All thinking men are atheists';
echo $tekst[0]; 				//A
echo '<br>';
echo $tekst[4];

echo '<br>';
echo '<br>';

$tekst = 'All thinking men are atheists';
echo substr($tekst, 3,5);		//thin
echo '<br>';
echo substr($tekst, 4, -13);	//thinking men
echo '<br>';
echo substr($tekst, -8, 7);