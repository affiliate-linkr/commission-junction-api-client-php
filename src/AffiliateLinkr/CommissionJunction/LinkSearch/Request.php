# - .php
Commission Detail API Reference
URL: https://commissions.api.cj.com/query

The Commission Detail API is a GraphQL API

available to both Advertisers and publishers 

to access nearly real-time commission data from their accounts.

This is useful for anyone who wants the freshest commission data available

or for anyone who needs commission data updated on a regular basis

We offer a variety of search criteria, such as posting date range, ad ids, action statuses, etc.

Sample Request
curl -H "Authorization: Bearer <eyJhbGciOiJIUzI1NiIXVCJ9>    
  -XPOST https://commissions.api.cj.com/query -d 
  '{ publisherCommissions(forPublishers: ["999"],
  sincePostingDate:"2018-08-08T00:00:00Z",b
  beforePostingDate"2021-20-06 T12:06:00Z"){count payloadComplete records

 {actionTrackerName websiteName advertiserName postingDate pubCommissionAmountUsd items 
  { quantity perItemSaleAmountPubCurrency totalCommissionPubCurrency }  }  } }'
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
