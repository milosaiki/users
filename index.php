<?php
require_once 'vendor/autoload.php';

use Site\Classes\Request;
use Site\Classes\Bootstrap;
use Site\Classes\PDOConnection;

session_start();

$request = new Request($_POST, $_GET, $_SESSION, $_SERVER);
$bootstrap = new Bootstrap($request);