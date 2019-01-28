<?php
/**
 * Created by PhpStorm.
 * User: heiki.kotsar
 * Date: 28.01.2019
 * Time: 14:19
 */

$username = $_GET['uname'];
$password = $_GET['upass'];
echo $username.' '.$password;

// loome ühendus andmebaasiga
$ikt = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
// küsime kasutaja andmete olemasolu andmebaasis
$sql = 'SELECT * FROM users WHERE username="'.$username.'" AND password="'.md5($password).'"';
$users = getData($sql, $ikt);
// väljastame andmed
echo $users[0]['first_name'].' '.$users[0]['last_name'];