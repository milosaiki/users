<?php 

namespace Site\Entity;

class User {
  
  private $id;
  private $name;
  private $email;
  private $password;

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }  

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of email
   */ 
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of password
   */ 
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */ 
  public function setPassword($password)
  {
    $this->password = md5($password);

    return $this;
  }

  public function save($db)
  {
    try {
      $sql = 'INSERT INTO user (`name`, `email`, `password`) VALUES (:username, :email, :userpassword)';
      $stmt = $db->prepare($sql);
      $stmt->bindValue(':username', $this->name);
      $stmt->bindValue(':email', $this->email);
      $stmt->bindValue(':userpassword', $this->password);
      $stmt->execute();
      
      return true;

    } catch(\Exception $e) {
      return false;
    }
  }

}