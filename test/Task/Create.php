<?php
$payload = array('title'=>'New Task Example 1','start_datetime'=>date('c'));
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
print_r($client->tasks->Create($payload));
?>