<?php
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
$result=$client->tasks->Delete("6253461993684992");
print_r($result);
?>