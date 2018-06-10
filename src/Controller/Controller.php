<?php

namespace Site\Controller;

use Site\Classes\View;

class Controller
{

  protected $view;
  protected $request;
  protected $db;

  public function __construct($request, $db)
  {
    $this->view = new View();
    $this->request = $request;
    $this->db = $db->getConnection();
  }

  

}