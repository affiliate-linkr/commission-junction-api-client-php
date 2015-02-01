<?php

namespace AffiliateLinkr\CommissionJunction;

class ApiService {
  
  private $xmlout;
  
  function __construct() {
    $this->xmlout = null;
  }
  
  public function linkSearch(ApiCredentials $credentials, LinkSearch\Request $request) {
    $url_linksearch = 'https://linksearch.api.cj.com/v2/link-search?';

    $isSuccess = 1;
    
    // optimize this so that totalMatched isn't exceeded by $RECORDS_PER_PAGE * $pageNumber to minimize real end retries

    $queryParameters = array(
        "website-id" => $request->getWebsiteId(),
        "advertiser-ids" => $request->getAdvertiserIds(),
        "records-per-page" => $request->getRecordsPerPage(),
        "page-number" => $request->getPageNumber(),
    );
 
   $this->xmlout = '';
    try {
      $this->xmlout = $this->_query($url_linksearch, $credentials->getDeveloperKey(), $queryParameters);
    } catch (\Exception $e) {
      throw $e;
    }

    // if there is an error in the API return, just skip for now
    if($this->xmlout == null) { // no response
      throw new \Exception('error in the CJ LinkSearch API response');
    }
    
    // before parsing the XML, need to clean out invalid characters
    // &#3;
    $invalidCharacters = array("&#3;", "&#25;");
    foreach ($invalidCharacters as $invalidChar) {
      $invalidCount = 0;
      $this->xmlout = str_replace($invalidChar, '', $this->xmlout, $invalidCount);
      if($invalidCount > 0) {
        // should log this
      }
    }
    
    $oxmlout = '';
    libxml_use_internal_errors(true);
    try {
      $oxmlout = new \SimpleXMLElement($this->xmlout);
    } catch (\Exception $e) {
      throw $e;
    }    
    
    // this means the XML could not be parsed, save it off somewhere
    if($oxmlout === false) {
      $allXMLErrors = "";
      foreach(libxml_get_errors() as $error) {
          $allXMLErrors .= $error->message . "|";
      }
      throw new \Exception('CJ XML could not be parsed, errors:' . $allXMLErrors);
    }    

    if($oxmlout != '') {
      throw new \Exception('CJ XML could not be parsed XML parsing returned blank');
    }     
    
    if($oxmlout->Errors) {
      throw new \Exception('error in parsing the CJ LinkSearch api response');
    }
    
    if(isset($oxmlout->{'error-message'})) {
      throw new \Exception('CJ official error message ' . $oxmlout->{'error-message'});
    }
    
    $responseMapper = new LinkSearch\ResponseMapper();
    
    $response = null;
    try {
      $response = $responseMapper->load($oxmlout);
    } catch (\Exception $e) {
      throw $e;
    }
    
    return $response; 
  }
  
  private function _query($url, $apiKey, $queryParameters) {
  
    $queryArray = array();
    foreach ($queryParameters as $key => $value) {
      array_push($queryArray,sprintf("%s=%s",$key, urlencode($value)));
    }
    $queryString = implode("&",$queryArray);
  
    $ch = curl_init();
    $url .= $queryString;
    $headers = array(
        "Authorization: " . $apiKey,
    );
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers );
    $r = curl_exec($ch);
    if(curl_errno($ch)) {
      throw new \Exception('Commission Junction ApiService::_query error:' . curl_error($ch));
      return null;
    } else {
      curl_close($ch);
      return $r;
    }
  }
  
  public function getXml() {
    return $this->xmlout;
  }
}