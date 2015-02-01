<?php

namespace AffiliateLinkr\Tests\CommissionJunction;

/**
 * These test will user your real developer key, either defined by environment
 * variable or in the credentials file in your home directory
 *
 * @author jeremyzerr
 */
class ApiServiceTest extends \PHPUnit_Framework_TestCase {
  
  public function testApiCredentialsCreation() {
    
    // create credentials
    $oApiCredentials = new \AffiliateLinkr\CommissionJunction\ApiCredentials();

    $this->assertNotNull($oApiCredentials);
    
    $this->assertNotNull($oApiCredentials->getDeveloperKey());
  } 
  
  public function testLinkSearchService() {
    // create credentials
    $oApiCredentials = \AffiliateLinkr\CommissionJunction\ApiCredentials::factory();
    // create service object
    $oService = new \AffiliateLinkr\CommissionJunction\ApiService();
    $this->assertNotNull($oService);
    // create request
    $oRequest = new \AffiliateLinkr\CommissionJunction\LinkSearch\Request();
    $this->assertNotNull($oRequest);
    // fill up the request with just the most basic required fields
    $oRequest->setWebsiteId($oApiCredentials->getWebsiteId());
    // call link search service
    $oResponse = $oService->linkSearch($oApiCredentials, $oRequest);
    $this->assertNotNull($oResponse);
  }
  
}