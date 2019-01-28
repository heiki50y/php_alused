<?php
/**
 * Created by PhpStorm.
 * User: heiki.kotsar
 * Date: 28.01.2019
 * Time: 15:12
 */
session_start();
session_destroy();
header('Location: ../index.php');