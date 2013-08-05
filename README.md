composer-telapi
======

composer package for telapi




EXAMPLE
======
<?php
require 'vendor/autoload.php';
use Gecatalin\TelApi\TelApi;
use Gecatalin\TelApi\TelApi_InboundXML;

$telapi = new TelApi(array('account_sid'=>'AC3a36026b9e8a4ca29bd0d0497fb4739f','auth_token'=>'5d236103f1494856a0f5682643e64e48'));
print_r(get_class_methods($telapi));
$call = $telapi->create('calls', array(
    'From' => '40723211111',
    'To' => '40700000000',
    'Url' => 'YOUR URL'
));
