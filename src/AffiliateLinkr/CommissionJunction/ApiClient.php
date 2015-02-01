<?php

namespace AffiliateLinkr\CommissionJunction;

class ApiClient {
  private $developerKey;
  
  function __construct() {
    $this->developerKey = null;
  }
  
  function setDeveloperKey($value) {
    $this->developerKey = $value;
  }
  
  function getDeveloperKey() {
    return $this->developerKey;
  }
}