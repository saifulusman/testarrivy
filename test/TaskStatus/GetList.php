<?php
require_once('../../src/ArrivyClient.php');
$client =new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C');
$result=$client->taskStatus->GetList("5141764537057280");
print_r($result);