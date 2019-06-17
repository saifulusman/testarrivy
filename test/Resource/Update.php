<?php
$payload = array('name'=>'Truck 012222','type'=>'Transport Vehicle',
    'details'=>'Transport Vehicle Details');
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
$result=$client->resource->Update($payload,'5632621182713856');
print_r($result);
?>