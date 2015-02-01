<?php

namespace AffiliateLinkr\CommissionJunction\LinkSearch;

/**
 * Map CJ API output for a LinkSearch response into a Response object
 */
class ResponseMapper {

  function __construct() {
  }

  function __destruct() {
  }
  
  public function load(\SimpleXMLElement $apiObject) {
    $obj = new Response();
    return $this->doLoad($obj, $apiObject);    
  }  
  
  /**
   * This will take an associative array of API output and return a Response object
   */
  public function doLoad(Response $obj, \SimpleXMLElement $apiObject) {
    
    if(!isset($apiObject)) {
      throw new \Exception('ResponseMapper::doLoad xml object is not set');
    }

    if(!isset($apiObject->links)) {
      return $obj;
    }
    
    $responseAttributes = $apiObject->links->attributes();
    
    if(!$apiObject->links->attributes()) {
      throw new \Exception('link attributes not good');
    }
    
    $totalMatched = $responseAttributes["total-matched"];
    $recordsReturned = $responseAttributes["records-returned"];
    $pageNumber = $responseAttributes["page-number"];
    $obj->setTotalMatched($totalMatched);
    $obj->setRecordsReturned($recordsReturned);
    $obj->setPageNumber($pageNumber);
    
    // take the XML for the links and use the LinkResponse mapper
    $linkMapper = new LinkResponseMapper();         
    
    $links = array();
    foreach ($apiObject->links->link as $linkApiObject) {
      array_push($links, $linkMapper->load($linkApiObject));
    }
    $obj->setLinks($links);
  
    return $obj;
  }

}