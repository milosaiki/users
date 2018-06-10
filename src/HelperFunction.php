<?php

namespace Site;

class HelperFunction 
{

  public static function isEmail($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
  }

  public static function validateField($value) 
  {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);

    return $value;
  }
}