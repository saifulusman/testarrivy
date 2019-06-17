<?php
$payload = array('name'=>'Driverssssss','description'=>'Field drivers',
    'email'=>'mcts.s@gmail.com','phone'=>'03405199390');
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
$result=$client->group->Create($payload);
print_r($result);
?>