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

echo '<pre>';
print_r($iktConn);
echo '<pre>';
