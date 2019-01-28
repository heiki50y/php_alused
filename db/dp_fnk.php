<?php
/**
 * Created by PhpStorm.
 * User: heiki.kotsar
 * Date: 28.01.2019
 * Time: 13:14
 */
function connect_db($hostName, $dbUser, $dbPass, $dbName) {
    $conn = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        echo 'unable to connect to MySQL<br>';
        echo mysqli_connect_error().'<br>';
        exit;
    }

    return $conn;

}

function query($sql, $conn){
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo 'Problem with <b>'.$sql.'</b><br>';
        exit;
    }
    return $result;
}

