<?php 
namespace Gecatalin;
require 'vendor/autoload.php';
use Gecatalin\Telapi\Telapi;
use Gecatalin\Telapi\Telapi_InboundXML;

$telapi = new Telapi(array('account_sid'=>'AC3a36026b9e8a4ca29bd0d0497fb4739f','auth_token'=>'5d236103f1494856a0f5682643e64e48'));
print_r(get_class_methods($telapi));
$call = $telapi->create('calls', array(
    'From' => '40723211111',
    'To' => '40723022158',
    'Url' => 'http://cumload.endemic.ro/test.php'
));
