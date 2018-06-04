<?php 

namespace Site\Classes;

use Site\Classes\Config;

class View 
{

  public function render($template)
  {
    require_once Config::TEMPLATE_DIR . $template;
  }

  public function redirect($uri)
  {
    $uri == '/' ? header("Location: /") : header("Location: /" . $uri);
  }
}