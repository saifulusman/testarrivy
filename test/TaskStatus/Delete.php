<?php
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
print_r($client->taskStatus->Delete("5141764537057280","6302735838216192"));
?>