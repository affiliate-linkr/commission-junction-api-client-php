<?php

namespace AffiliateLinkr\CommissionJunction\LinkSearch;

class LinkResponse {
  
  private $advertiserId;
  private $clickCommission;
  private $creativeHeight;
  private $creativeWidth;
  private $leadCommission;
  private $linkCodeHtml;
  private $linkCodeJavascript;
  private $destination;
  private $description;
  private $linkId;
  private $linkName;
  private $linkType;
  private $advertiserName;
  private $performanceIncentive;
  private $promotionType;
  private $promotionStartDate;
  private $promotionEndDate;
  private $relationshipStatus;
  private $saleCommission;
  private $sevenDayEpc;
  private $threeMonthEpc;
  private $category;
  private $language;
  
  function __construct() {
    $this->advertiserId = null;
    $this->clickCommission = null;
    $this->creativeHeight = null;
    $this->creativeWidth = null;
    $this->leadCommission = null;
    $this->linkCodeHtml = null;
    $this->linkCodeJavascript = null;
    $this->destination = null;
    $this->description = null;
    $this->linkId = null;
    $this->linkName = null;
    $this->linkType = null;
    $this->advertiserName = null;
    $this->performanceIncentive = null;
    $this->promotionType = null;
    $this->promotionStartDate = null;
    $this->promotionEndDate = null;
    $this->relationshipStatus = null;
    $this->saleCommission = null;
    $this->sevenDayEpc = null;
    $this->threeMonthEpc = null;
    $this->category = null;
    $this->language = null;
  }
  
  public function setAdvertiserId($value) {
    $this->advertiserId = $value;
  }
  
  public function getAdvertiserId() {
    return $this->advertiserId;
  }
  
  public function setClickCommission($value) {
    $this->clickCommission = $value;
  }
  
  public function getClickCommission() {
    return $this->clickCommission;
  }
  
  public function setCreativeHeight($value) {
    $this->creativeHeight = $value;
  }
  
  public function getCreativeHeight() {
    return $this->creativeHeight;
  }
  
  public function setCreativeWidth($value) {
    $this->creativeWidth = $value;
  }
  
  public function getCreativeWidth() {
    return $this->creativeWidth;
  }
  
  public function setLeadCommission($value) {
    $this->leadCommission = $value;
  }
  
  public function getLeadCommission() {
    return $this->leadCommission;
  }
  
  public function setLinkCodeHtml($value) {
    $this->linkCodeHtml = $value;
  }
  
  public function getLinkCodeHtml() {
    return $this->linkCodeHtml;
  }
  
  public function setLinkCodeJavascript($value) {
    $this->linkCodeJavascript = $value;
  }
  
  public function getLinkCodeJavascript() {
    return $this->linkCodeJavascript;
  }
  
  public function setDestination($value) {
    $this->destination = $value;
  }
  
  public function getDestination() {
    return $this->destination;
  }
  
  public function setDescription($value) {
    $this->description = $value;
  }
  
  public function getDescription() {
    return $this->description;
  }
  
  public function setLinkId($value) {
    $this->linkId = $value;
  }
  
  public function getLinkId() {
    return $this->linkId;
  }
  
  public function setLinkName($value) {
    $this->linkName = $value;
  }
  
  public function getLinkName() {
    return $this->linkName;
  }   
  
  public function setLinkType($value) {
    $this->linkType = $value;
  }
  
  public function getLinkType() {
    return $this->linkType;
  }
  
  public function setAdvertiserName($value) {
    $this->advertiserName = $value;
  }
  
  public function getAdvertiserName() {
    return $this->advertiserName;
  }
  
  public function setPerformanceIncentive($value) {
    $this->performanceIncentive = $value;
  }
  
  public function getPerformanceIncentive() {
    return $this->performanceIncentive;
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
  
  public function setRelationshipStatus($value) {
    $this->relationshipStatus = $value;
  }
  
  public function getRelationshipStatus() {
    return $this->relationshipStatus;
  }
  
  public function setSaleCommission($value) {
    $this->saleCommission = $value;
  }
  
  public function getSaleCommission() {
    return $this->saleCommission;
  }
  
  public function setSevenDayEpc($value) {
    $this->sevenDayEpc = $value;
  }
  
  public function getSevenDayEpc() {
    return $this->sevenDayEpc;
  }
  
  public function setThreeMonthEpc($value) {
    $this->threeMonthEpc = $value;
  }
  
  public function getThreeMonthEpc() {
    return $this->threeMonthEpc;
  }
  
  public function setLanguage($value) {
    $this->language = $value;
  }
  
  public function getLanguage() {
    return $this->language;
  }
  
  public function setCategory($value) {
    $this->category = $value;
  }
  
  public function getCategory() {
    return $this->category;
  }  
  
}