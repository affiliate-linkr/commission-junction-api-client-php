<?php

namespace AffiliateLinkr\CommissionJunction\LinkSearch;

class Request {
  
  private $websiteId;
  private $advertiserIds;
  private $keywords;
  private $category;
  private $linkType;
  private $promotionType;
  private $promotionStartDate;
  private $promotionEndDate;
  private $pageNumber;
  private $recordsPerPage;  
  
  function __construct() {
    $this->websiteId = null;
    $this->advertiserIds = null;
    $this->keywords = null;
    $this->category = null;
    $this->linkType = null;
    $this->promotionType = null;
    $this->promotionStartDate = null;
    $this->promotionEndDate = null;
    $this->pageNumber = null;
    $this->recordsPerPage = null;
  }
  
  public function setWebsiteId($value) {
    $this->websiteId = $value;
  }
  
  public function getWebsiteId() {
    return $this->websiteId;
  }
  
  public function setAdvertiserIds($value) {
    $this->advertiserIds = $value;
  }
  
  public function getAdvertiserIds() {
    return $this->advertiserIds;
  }
  
  public function setKeywords($value) {
    $this->keywords = $value;
  }
  
  public function getKeywords() {
    return $this->keywords;
  }
  
  public function setCategory($value) {
    $this->category = $value;
  }
  
  public function getCategory() {
    return $this->category;
  }  
  
  public function setLinkType($value) {
    $this->linkType = $value;
  }
  
  public function getLinkType() {
    return $this->linkType;
  }
  
  public function setPromotionType($value) {
    $this->promotionType = $value;
  }
  
  public function getPromotionType() {
    return $this->promotionType;
  }
  
  public function setPromotionStartDate($value) {
    $this->promotionStartDate = $value;
  }
  
  public function getPromotionStartDate() {
    return $this->promotionStartDate;
  }
  
  public function setPromotionEndDate($value) {
    $this->promotionEndDate = $value;
  }
  
  public function getPromotionEndDate() {
    return $this->promotionEndDate;
  }
  
  public function setPageNumber($value) {
    $this->pageNumber = $value;
  }
  
  public function getPageNumber() {
    return $this->pageNumber;
  }
  
  public function setRecordsPerPage($value) {
    $this->recordsPerPage = $value;
  }
  
  public function getRecordsPerPage() {
    return $this->recordsPerPage;
  }  
  
}