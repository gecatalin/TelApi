composer-telapi
======

composer package for telapi

installation
======
First install composer (http://getcomposer.org/).

Create `composer.json` in project root:

    {
    "repositories": [{
    "type": "package",
    "package": {
        "name": "telapi/telapi-php",
        "version": "dev-master",
        "source": {
                "url": "https://github.com/TelAPI/telapi-php.git",
            "type": "git",
        "reference": "master"
        }
        }
    }],
    	"require": {
        	"gecatalin/telapi": "dev-master"
    	}
	}
	

Install via composer:

	php composer.phar install

Autoloading:

	require 'vendor/autoload.php';
	use TelApi\TelApi;
	use TelApi\TelApi_InboundXML;



example
======
```
<?php
require 'vendor/autoload.php';
use TelApi\TelApi;
use TelApi\TelApi_InboundXML;

$telapi = new TelApi(array('account_sid'=>'','auth_token'=>''));
$call = $telapi->create('calls', array(
    'From' => '40723211111',
    'To' => '40700000000',
    'Url' => 'YOUR URL'
));
```
