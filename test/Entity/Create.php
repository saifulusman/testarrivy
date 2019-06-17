<?php
$payload = array('name'=>'Hafiz Saif ul Usman 11','type'=>'Crew Lead',
    'email'=>'mcts.sssss@gmail.com','phone'=>'03405199000',
    'permission'=>'ADMIN');
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
$result=$client->entity->Create($payload);
print_r($result);
?>