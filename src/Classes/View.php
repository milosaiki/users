<?php 

namespace Site\Classes;

use Site\Classes\Config;

class View 
{

  /* public function render($template)
  {
    require_once Config::TEMPLATE_DIR . $template;
  }

  public function redirect($uri)
  {
    $uri == '/' ? header("Location: /") : header("Location: /" . $uri);
  } */

  protected $template_dir = Config::TEMPLATE_DIR;

  protected $vars = [];

  public function __construct($template_dir = null)
  {
    if ($template_dir !== null) {
      $this->template_dir = $template_dir;
    }
  }

  public function render($template_file, $args = [])
  {

    $output = file_get_contents($this->template_dir . $template_file);

    foreach ($args as $key => $value) {
      $this->vars[$key] = $value;
    }

    foreach ($this->vars as $key => $value) {
      if (is_array($value)) {
        foreach ($value as $k => $v) {
          $tagToReplace = "{{ $k }}";
          $output = str_replace($tagToReplace, $v, $output);
        }
      } else {
        $tagToReplace = "{{ $key }}";
        $output = str_replace($tagToReplace, $value, $output);
      }
    }

    if (file_exists($this->template_dir . $template_file)) {
      include $this->template_dir . $template_file;
    } else {
      throw new Exception('no template file ' . $template_file . ' present in directory ' . $this->template_dir);
    }
  }

  public function redirect($uri)
  {
    $uri == '/' ? header("Location: /") : header("Location: /" . $uri);
  }

  public function rrender($template_file, $args = [])
  {
    if (!file_exists($this->template_dir . $template_file)) {
      return "Error loading template file ($this->file).";
    }
    $output = file_get_contents($this->template_dir . $template_file);

    foreach ($args as $key => $value) {
      $this->vars[$key] = $value;
    }

    foreach ($this->vars as $key => $value) {
      $tagToReplace = "[@$key]";
      $output = str_replace($tagToReplace, $value, $output);
    }

    return $output;
  }
}