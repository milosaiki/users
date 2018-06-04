<?php
require_once 'vendor/autoload.php';

use Site\Classes\Request;
use Site\Classes\Bootstrap;
use Site\Classes\PDOConnection;

$request = new Request($_POST, $_GET, $_SERVER);
$bootstrap = new Bootstrap($request);