<?php

namespace AffiliateLinkr\CommissionJunction\LinkSearch;

class Response {
  
  private $pageNumber;
  private $totalMatched;
  private $recordsReturned;
  private $links;  
  
  function __construct() {
    $this->pageNumber = null;
    $this->totalMatched = null;
    $this->recordsReturned = null;
    $this->links = array();
  }
  
  public function setPageNumber($value) {
    $this->pageNumber = $value;
  }
  
  public function getPageNumber() {
    return $this->pageNumber;
  }
  
  public function setTotalMatched($value) {
    $this->totalMatched = $value;
  }
  
  public function getTotalMatched() {
    return $this->totalMatched;
  }
  
  public function setRecordsReturned($value) {
    $this->recordsReturned = $value;
  }
  
  public function getRecordsReturned() {
    return $this->recordsReturned;
  }  
  
  public function setLinks($values) {
    $this->links = $values;
  }
  
  public function getLinks() {
    return $this->links;
  }
  
}