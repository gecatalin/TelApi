<?php
namespace TelApi;
require_once __DIR__.'/../../../vendor/TelApi/telapi-php/library/TelApi/Exception.php';

/** @see TelApi_Schemas */
require_once __DIR__.'/../../../vendor/TelApi/telapi-php/library/TelApi/Schemas.php';

/** @see TelApi_InboundXML **/
require_once __DIR__.'/../../../vendor/TelApi/telapi-php/library/TelApi/InboundXML.php';

/** @see TelApi_Helpers **/
require_once __DIR__.'/../../../vendor/TelApi/telapi-php/library/TelApi/Helpers.php';

/** @see TelApi_Connector **/
require_once __DIR__.'/../../../vendor/TelApi/telapi-php/library/TelApi/Connector.php';

/** @see TelApi_Related **/
require_once __DIR__.'/../../../vendor/TelApi/telapi-php/library/TelApi/Related.php';

/** @see TelApi_Client **/
require_once __DIR__.'/../../../vendor/TelApi/telapi-php/library/TelApi/Sdk.php';

/** @see TelApi_Client **/
require_once __DIR__.'/../../../vendor/TelApi/telapi-php/library/TelApi/Connect.php';

class TelApi extends \TelApi_Related{
	public function __construct($options = null){
		if(is_array($options)){
			$this->setOptions($options);
		}
	}
}
