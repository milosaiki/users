<?php

namespace Site\Classes;

class Session 
{
  public function __construct()
  {
    session_start();
  }

  public function set($key, $value) {
    $_SESSION[$key] = $value;
  }

  public function get($key) {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
  }

  public function remove($key) {
    unset($_SESSION[$key]);
  }
}