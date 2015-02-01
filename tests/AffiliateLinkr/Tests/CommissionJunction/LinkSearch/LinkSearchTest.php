<?php

namespace AffiliateLinkr\Tests\CommissionJunction\LinkSearch;

/**
 * Description of LinkSearchTest
 *
 * @author jeremyzerr
 */
class LinkSearchTest extends \PHPUnit_Framework_TestCase {
  
  public function testRequestCreation() {
    // create request
    $request = new \AffiliateLinkr\CommissionJunction\LinkSearch\Request();

    $this->assertNotNull($request);
  }
  
}