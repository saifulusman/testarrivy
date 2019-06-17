<?php
$payload = array('type'=>'STARTED','time'=>date('c'),
    'reporter_name'=>'Hafiz Saif ul Usman','reporter_id'=>'5751226369048576');
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
$result=$client->taskStatus->Create($payload,"5141764537057280");
print_r($result);
?>