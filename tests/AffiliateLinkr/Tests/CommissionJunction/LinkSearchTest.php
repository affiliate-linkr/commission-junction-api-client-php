<?php

namespace AffiliateLinkr\Tests\CommissionJunction;

/**
 * Description of LinkSearchTest
 *
 * @author jeremyzerr
 */
class LinkSearchTest extends \PHPUnit_Framework_TestCase {
  
  public function testApiClientCreation() {
    // create client
    $oApiClient = new \AffiliateLinkr\CommissionJunction\ApiClient();

    $this->assertNotNull($oApiClient);
  }
  
}