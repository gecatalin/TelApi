<?php 
namespace Gecatalin\Telapi;
class Telapi{
	public function __construct(){
		require_once "../../vendor/Telapi/telapi-php/library/TelApi.php";
		return Telapi::getInstance();
	}
}