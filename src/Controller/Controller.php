<?php

namespace Site\Controller;

use Site\Classes\View;

class Controller
{

  protected $view;
  protected $request;
  protected $db;

  public function __construct($request, $connection)
  {
    $this->view = new View();
    $this->request = $request;
    $this->db = new \PDO('mysql:host=127.0.0.1;dbname=users', 'root', '');
  }

  

}