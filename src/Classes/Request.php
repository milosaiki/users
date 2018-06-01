<?php

namespace Site\Classes;

class Request 
{

  private $post;
  private $get;
  private $session;
  private $server;

  public function __construct($post = [], $get = [], $session = [], $server = [])
  {
    $this->post = $post;
    $this->get = $get;
    $this->session = $session;
    $this->server = $server;
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

  public function sessionParam($key, $default = '') {
    return isset($this->session[$key]) ? $this->session[$key] : $default;
  }

  public function setSessionParam($key, $value) {
    $this->session[$key] = $value;
  }

  public function unsetSessionParam($key) {
    unset($this->session[$key]);
  }

}