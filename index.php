<?php
require_once 'vendor/autoload.php';

use Site\Classes\Request;
use Site\Classes\Bootstrap;
use Site\Classes\PDOConnection;

$db = PDOConnection::instance();
$request = new Request($_POST, $_GET, $_SERVER);

$loader = new Twig_Loader_Filesystem(realpath(__DIR__)  . '/templates');
$twig = new Twig_Environment($loader,[
  'debug' => true,
]);
$twig->addExtension(new Twig_Extension_Debug());
$twig->addGlobal("session", $_SESSION);
$twig->addGlobal("request", $_REQUEST);
$bootstrap = new Bootstrap($request, $db, $twig);