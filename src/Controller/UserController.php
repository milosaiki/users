<?php

namespace Site\Controller;

use Site\Controller\Controller;
use Site\Entity\User;
use Site\Classes\Session;
use Site\HelperFunction;

class UserController extends Controller {

  public function __construct($request, $db)
  {
    parent::__construct($request, $db);
  }

  public function indexAction() 
  {
    $args = [];
    $user = $this->request->getSessionParam('user');

    if ($user) {
      $args['user'] = $user;
      //$this->view->user = $user;
    }
    
    $this->view->render('index.php', $args);
  }

  public function registerAction() 
  {
    $this->view->render('register.php');
  }

  public function userAction() 
  {
    $user = $this->request->getSessionParam('user');
    if ($user) {
      $this->view->user = $user;
    }

    $this->view->render('user.php');
  }

  public function saveAction()
  {
    
    $name = HelperFunction::validateField($this->request->postParam('name'));
    $email = HelperFunction::validateField($this->request->postParam('email'));
    $password = HelperFunction::validateField($this->request->postParam('password'));
    $user = $this->user($email);

    if (!$user) {
      $User = new User();
      $User->setName($name);
      $User->setEmail($email);
      $User->setPassword($password);

      $res = $User->save($this->db);

      if ($res) {
        $this->view->redirect('user');
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
    $this->request->unsetSessionParam('user');

    $this->view->redirect('/');
  }

  public function logAction() 
  {
    $args = [];
    $email = HelperFunction::validateField($this->request->postParam('email'));
    $isValidEmail = HelperFunction::isEmail($email);

    $password = HelperFunction::validateField($this->request->postParam('password'));
    $password = md5($password);

    $User = $this->selectUser($email, $password);
    
    if (!$User) {
      $this->view->error = 'Wrong email or password';
      $args['success'] = -1;
    } else {
      $this->request->setSessionParam('user', $User);
      $args['success'] = 1;
    }
    echo json_encode($args);
    die();
    //return json_encode($args);
  }

  public function searchAction() {
    $user = $this->request->getSessionParam('user');
    $search = $this->request->getParam('search');

    if (!isset($user)) {
      $this->view->error = 'Please log in to use search';
      $this->view->render('user.php');
    } else {

      $results = $this->search($search);

      $this->view->search = $search;
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

  public function updateAction() {
    $name = $this->request->postParam('name');
    $email = $this->request->postParam('email');
    $password = md5($this->request->postParam('password'));
    $id = $this->request->postParam('userId');

    $this->updateUser($name, $email, $password, $id);
    $this->request->unsetSessionParam('user');
    $this->request->setSessionParam('user', ['id' => $id, 'name' => $name, 'email' => $email, 'password' => $password]);

    $this->view->redirect('user');
    
  }

  private function updateUser($name, $email, $password, $id) {
    $sql = 'UPDATE user SET `name` = :username, email = :email, `password` = :userpassword WHERE id = :id';
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':username', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':userpassword', $password);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
  }

}