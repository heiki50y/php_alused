<?php
/**
 * Created by PhpStorm.
 * User: heiki.kotsar
 * Date: 28.01.2019
 * Time: 12:01
 */


require_once 'conf.php';
require_once 'dp_fnk.php';

$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);


$sql = 'UPDATE user SET last_name="Ebatavaline" WHERE user_id=1';
$res = query($sql, $iktConn);

$sql = 'SELECT * FROM user';
$users = getData($sql, $iktConn);

echo '<pre>';
print_r($iktConn);
echo '<pre>';

echo 'Tere, '.$users[0]['first_name'].' '.$users[0]['last_name'].'<br>';

require_once 'fnk.php';
$loginForm = htmlFromFile('login');
echo $loginForm;