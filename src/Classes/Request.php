<?php

namespace Site\Classes;

use Site\Classes\Session;

class Request 
{

  private $post;
  private $get;
  private $server;
  private $session;

  public function __construct($post = [], $get = [], $server = [])
  {
    $this->post = $post;
    $this->get = $get;
    $this->server = $server;
    $this->session = new Session();
  }

  public function query()
  {
    return $this->get;
  }

  public function request() 
  {
    return $this->post;
  }

  public function session()
  {
    return $this->session;
  }

  public function server()
  {
    return $this->server;
  }

  public function getParam($key, $default = '') 
  {
    return isset($this->get[$key]) ? $this->get[$key] : $default;
  }

  public function postParam($key, $default = '') 
  {
    return isset($this->post[$key]) ? $this->post[$key] : $default;
  }

  public function getSessionParam($key, $default = null) {
    return ($this->session->get($key)) ? $this->session->get($key) : $default;
  }

  public function setSessionParam($key, $value) {
    $this->session->set($key, $value);
  }

  public function unsetSessionParam($key) {
    $this->session->remove($key);
  }

}