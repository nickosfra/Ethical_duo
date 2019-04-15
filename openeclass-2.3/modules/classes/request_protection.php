<?php
session_start();

class RequestProtection {

  public $hash;
  private $previous_hash;

  function __construct() {

    if (isset($_SESSION['request_token'])) {
      $this->previous_hash = $SESSION['request_token'];
    }
     $this->hash = $SESSION['request_token'] = md5(uniqid());
  }

  public function is_valid($key = 'csrf_token') {
    return isset($_POST[$key]) && ($_POST[$key] === $this->previous_hash);

  }
}
