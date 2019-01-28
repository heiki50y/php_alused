<?php
/**
 * Created by PhpStorm.
 * User: heiki.kotsar
 * Date: 28.01.2019
 * Time: 14:07
 */

function htmlFromFile($fileName){
    $fileName = 'html/'.$fileName.'.html';
    $fp = fopen($fileName, 'r');
    $content = fread($fp, filesize($fileName));
    fclose($fp);
    return $content;
}