<?php
$payload = array('name'=>'Hafiz Saif ul Usman','type'=>'Crew Lead',
    'email'=>'mcts.s@gmail.com','phone'=>'03405199390',
    'permission'=>'ADMIN','details'=>'Entity testing');
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
$result=$client->entity->Update($payload,'6008313850363904');
print_r($result);
?>