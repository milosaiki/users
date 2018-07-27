<?php

namespace Site\Classes;

class PDOConnection
{

  const DB_DSN = 'mysql:host=127.0.0.1;dbname=users';
  const DB_USERNAME = 'root';
  const DB_PASSWORD = 'afrahaza';

  /**
   * singleton instance
   * 
   * @var PDOConnection 
   */
  protected static $_instance = null;
  /**
   * Returns singleton instance of PDOConnection
   * 
   * @return PDOConnection 
   */
  public static function instance()
  {

    if (!isset(self::$_instance)) {

      self::$_instance = new PDOConnection();

    }

    return self::$_instance;
  }

  /**
   * Hide constructor, protected so only subclasses and self can use
   */
  protected function __construct()
  {
  }

  function __destruct()
  {
  }

  /**
   * Return a PDO connection using the dsn and credentials provided
   * 
   * @param string $dsn The DSN to the database
   * @param string $username Database username
   * @param string $password Database password
   * @return PDO connection to the database
   * @throws PDOException
   * @throws Exception
   */
  public function getConnection()
  {

    $conn = null;
    $dsn = self::DB_DSN;
    $username = self::DB_USERNAME;
    $password = self::DB_PASSWORD;
    try {

      $conn = new \PDO($dsn, $username, $password);
            
            //Set common attributes
      $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

      return $conn;

    } catch (PDOException $e) {
            
            //TODO: flag to disable errors?
      throw $e;

    } catch (Exception $e) {
            
            //TODO: flag to disable errors?
      throw $e;

    }
  }

  /** PHP seems to need these stubbed to ensure true singleton **/
  public function __clone()
  {
    return false;
  }
  public function __wakeup()
  {
    return false;
  }
}