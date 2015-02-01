<?php

namespace AffiliateLinkr\CommissionJunction\LinkSearch;

/**
 * Map CJ API output for a LinkSearch Link into a LinkResponse object
 *
 * Ways that documentation is wrong:
 * total-results does not exist anywhere
 * there are 3 attributes as a part of the links tag
 *   - total-matched
 *   - page-number
 *   - records-returned
 * performance-incentives in docs is actually performance-incentive in XML
 * link-destination in docs but actually destination in XML
 * link-description in docs but actually description in XML
 * the response includes the following fields that are not documented
 *   - category
 *   - language
 */
class LinkResponseMapper {

	function __construct() {
	}

	function __destruct() {
	}
	
	public function load(\SimpleXMLElement $apiObject) {
		$obj = new LinkResponse();
		return $this->doLoad($obj, $apiObject);    
	}  
	
	/**
	 * This will take XML output and return a LinkResponse object
	 */
	public function doLoad(LinkResponse $obj, \SimpleXMLElement $apiObject) {
		
		$obj->setAdvertiserId((string)$apiObject->{'advertiser-id'});
		$obj->setClickCommission((string)$apiObject->{'click-commission'});
		$obj->setCreativeHeight((string)$apiObject->{'creative-height'});
		$obj->setCreativeWidth((string)$apiObject->{'creative-width'});
		$obj->setLeadCommission((string)$apiObject->{'lead-commission'});
		$obj->setLinkCodeHtml((string)$apiObject->{'link-code-html'});
		$obj->setLinkCodeJavascript((string)$apiObject->{'link-code-javascript'});
		$obj->setDestination((string)$apiObject->{'destination'});
		$obj->setDescription((string)$apiObject->{'description'});
		$obj->setLinkId((string)$apiObject->{'link-id'});
		$obj->setLinkName((string)$apiObject->{'link-name'});
		$obj->setLinkType((string)$apiObject->{'link-type'});
		$obj->setAdvertiserName((string)$apiObject->{'advertiser-name'});
		$obj->setPerformanceIncentive((string)$apiObject->{'performance-incentive'});
		$obj->setPromotionType((string)$apiObject->{'promotion-type'});
		$obj->setPromotionStartDate((string)$apiObject->{'promotion-start-date'});
		$obj->setPromotionEndDate((string)$apiObject->{'promotion-end-date'});
		$obj->setRelationshipStatus((string)$apiObject->{'relationship-status'});
		$obj->setSaleCommission((string)$apiObject->{'sale-commission'});
		$obj->setSevenDayEpc((string)$apiObject->{'seven-day-epc'});
		$obj->setThreeMonthEpc((string)$apiObject->{'three-month-epc'});
    $obj->setLanguage((string)$apiObject->{'language'});
    $obj->setCategory((string)$apiObject->{'category'});
	
		return $obj;
	}

}