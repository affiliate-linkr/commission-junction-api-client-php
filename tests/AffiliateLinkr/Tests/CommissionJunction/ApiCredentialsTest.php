<?php

namespace AffiliateLinkr\Tests\CommissionJunction;

/**
 * Description of LinkSearchTest
 *
 * @author jeremyzerr
 */
class ApiCredentialsTest extends \PHPUnit_Framework_TestCase {
  
  public function testApiCredentialsCreation() {
    // create client
    $oApiCredentials = new \AffiliateLinkr\CommissionJunction\ApiCredentials();

    $this->assertNotNull($oApiCredentials);
  }
  
  public function testApiCredentialsCreationWithKey() {
    // create client
    $testKey = "TEST";
    $oApiCredentials = new \AffiliateLinkr\CommissionJunction\ApiCredentials($testKey);

    $this->assertNotNull($oApiCredentials);
    $this->assertEquals($testKey, $oApiCredentials->getDeveloperKey());
  }  

  public function testApiCredentialsFromFile() {
    // test just the ini file pulling
    // test file is in .affiliatelinkr/credentials
    $filename = dirname(__FILE__) . '/' . \AffiliateLinkr\CommissionJunction\ApiCredentials::CREDENTIALS_FILE;
    $oApiCredentials = \AffiliateLinkr\CommissionJunction\ApiCredentials::fromIni($filename);

    $this->assertNotNull($oApiCredentials);
    
    $this->assertEquals("FOOKEY", $oApiCredentials->getDeveloperKey());
    
  }  
  
  public function testApiCredentialsIndirectlyFromFile() {
    // test the ini file pulling when there are no environment variables set
    // set home directory
    $_SERVER['HOME'] = dirname(__FILE__);
    $varInFile = "FOOKEY";
    $oApiCredentials = \AffiliateLinkr\CommissionJunction\ApiCredentials::factory();

    $this->assertNotNull($oApiCredentials);
    
    $this->assertEquals($varInFile, $oApiCredentials->getDeveloperKey());
    
  } 
  
  public function testApiCredentialsFromEnvironment() {
    // test using environment variables overriding even when a file exists
    // set home directory that would be necessary for a file
    $_SERVER['HOME'] = dirname(__FILE__);
    // set the environment variable, this is what it should be set to
    $envVarKey = \AffiliateLinkr\CommissionJunction\ApiCredentials::ENV_KEY;
    $envVarSite = \AffiliateLinkr\CommissionJunction\ApiCredentials::ENV_SITE;
    $_SERVER[$envVarKey] = "BARKEY";
    $_SERVER[$envVarSite] = "FOOSITE";
    $oApiCredentials = \AffiliateLinkr\CommissionJunction\ApiCredentials::factory();

    $this->assertNotNull($oApiCredentials);
    
    $this->assertEquals($_SERVER[$envVarKey], $oApiCredentials->getDeveloperKey());
    $this->assertEquals($_SERVER[$envVarSite], $oApiCredentials->getWebsiteId());
    
  }   
  
}