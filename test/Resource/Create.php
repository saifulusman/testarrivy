<?php
$payload = array('name'=>'Truck 01111','type'=>'Transport Vehicle');
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
print_r($client->resource->Create($payload));
?>