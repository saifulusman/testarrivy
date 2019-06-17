<?php
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
$result=$client->group->Delete("5662486976004096");
print_r($result);
?>