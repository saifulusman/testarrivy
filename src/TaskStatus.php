<?php

require_once('ArrivyClient.php');
class TaskStatus
{
    /**
     * @var $client
     */
    private $client;

    /**
     * TaskStatus constructor.
     * @param $client
     */
    public  function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @param $task_id
     * @return json array
     */
    public function GetList($task_id){
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('GET', ArrivyClient::TASK_ENTITY_URL . "/" . $task_id.ArrivyClient::TASK_STATUS_ENTITY_URL, false);
        // api result
        return $response;
    }

    /**
     * @param $task_id
     * @param $taskstatus_id
     * @return json array
     */
    public function GetById($task_id,$taskstatus_id){
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('GET', ArrivyClient::TASK_ENTITY_URL . "/" . $task_id.ArrivyClient::TASK_STATUS_ENTITY_URL."/".$taskstatus_id, false);
        // api result
        return $response;
    }

    /**
     * @param array $payload
     * @param $task_id
     * @return json array
     */
    public function Create(array $payload,$task_id){
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('POST', ArrivyClient::TASK_ENTITY_URL."/".$task_id.ArrivyClient::TASK_STATUS_ENTITY_URL.ArrivyClient::ACTION_NAME_NEW, $payload);
        // api result
        return $response;
    }

    /**
     * @param array $payload
     * @param $task_id
     * @param $taskstatus_id
     * @return json array
     */
    public function Update(array $payload ,$task_id,$taskstatus_id){
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('PUT',ArrivyClient::TASK_ENTITY_URL."/".$task_id.ArrivyClient::TASK_STATUS_ENTITY_URL."/".$taskstatus_id, $payload);
        // api result
        return $response;
    }

    /**
     * @param $task_id
     * @param $taskstatus_id
     * @return json array
     */
    public function Delete($task_id,$taskstatus_id){
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('DELETE',ArrivyClient::TASK_ENTITY_URL."/".$task_id.ArrivyClient::TASK_STATUS_ENTITY_URL."/".$taskstatus_id, false);
        // api result
        return $response;
    }
}