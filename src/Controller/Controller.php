<?php

namespace Site\Controller;

class Controller
{

  protected $request;
  protected $db;
  protected $twig;

  public function __construct($request, $db, $twig)
  {
    $this->request = $request;
    $this->db = $db->getConnection();
    $this->twig = $twig;
  }

  public function redirect($uri)
  {
    $uri == '/' ? header("Location: /") : header("Location: /" . $uri);
  }
  

}