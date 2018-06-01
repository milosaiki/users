<?php

namespace Site\Controller;

use Site\Controller\Controller;
use Site\Classes\PDOConnection;
use Site\Entity\User;

class UserController extends Controller {

  public function __construct($request)
  {
    $db = PDOConnection::instance();
    parent::__construct($request, $db->getConnection());
  }

  public function indexAction() 
  {

    $this->view->render('index.php');
  }

  public function registerAction() 
  {
    $this->view->render('register.php');
  }

  public function loginAction() 
  {
    $this->view->render('user.php');
  }

  public function saveAction()
  {
    
    $name = $this->request->postParam('name');
    $email = $this->request->postParam('email');
    $password = $this->request->postParam('password');
    $user = $this->user($email);

    if (!$user) {
      $User = new User();
      $User->setName($name);
      $User->setEmail($email);
      $User->setPassword($password);

      $res = $User->save($this->db);

      if ($res) {
        $this->view->redirect('login');
      } else {
        $this->view->error = true;
        $this->view->render('register.php');
      }
    } else {
      $this->view->error = 'Email address taken';
      $this->view->render('register.php');
    }
    
  }

  public function logoutAction () {
    unset($_COOKIE['user']);

    $this->view->render('index.php');
  }

  public function logAction() 
  {
    $email = $this->request->postParam('email');
    $password = md5($this->request->postParam('password'));

    $User = $this->selectUser($email, $password);
    
    if ($User === false) {
      $this->view->error = 'Wrong email or password';
      $this->view->render('user.php');
    } else {

      setcookie('user', $User['name'], time() + (86400 * 30));
    
      $this->view->user = $User;
      $this->view->render('user.php');
    }
    
  }

  public function searchAction() {
    $search = $this->request->getParam('search');

    if (!isset($_COOKIE['user'])) {
      $this->view->error = 'Please log in to use search';
      $this->view->render('user.php');
    } else {

      $results = $this->search($search);

      $this->view->results = $results;
      $this->view->render('search.php');
    }
  }

  private function selectUser($email, $password) {
    $sql = 'SELECT * FROM `user` WHERE email = :email';
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $data = $stmt->fetch();


    if ($password != $data['password']) {
      return false;
    }

    return $data;
  }

  private function user($email) {
    $sql = 'SELECT `id`, `name`, `email` FROM user WHERE email = :email';
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    return $stmt->fetch();
  }

  private function search($search) {
    $searchTerm = '%' . $search . '%';
    $sql = 'SELECT `id`, `name`, `email` FROM user WHERE `name` LIKE :search OR `email` LIKE :search';
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':search', $searchTerm);
    $stmt->execute();

    $result = [];

    while ($data = $stmt->fetch(\PDO::FETCH_ASSOC)){
      $result[] = $data;
    } 

    return $result;
  }

}