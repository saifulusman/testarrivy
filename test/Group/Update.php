<?php
$payload = array('name'=>'Driversddddd','description'=>'Field drivers',
    'email'=>'mcts.s@gmail.com','phone'=>'03405199390','address_line_1'=>'11845 NE 85th St');
require_once('../../src/ArrivyClient.php');
$client = new ArrivyClient('4e69ee06-783b','Kv1IwIsNHtJZeggaAqcX0C','SANDBOX');
$result=$client->group->Update($payload,'5662486976004096');
print_r($result);
?>