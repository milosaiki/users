<?php

namespace Site\Controller;

use Site\Classes\View;

class Controller
{

  protected $view;
  protected $request;
  protected $db;
  protected $twig;

  public function __construct($request, $db, $twig)
  {
    $this->view = new View();
    $this->request = $request;
    $this->db = $db->getConnection();
    $this->twig = $twig;
  }

  public function redirect($uri)
  {
    $uri == '/' ? header("Location: /") : header("Location: /" . $uri);
  }
  

}