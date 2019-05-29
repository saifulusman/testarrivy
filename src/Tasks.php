<?php
require_once('ArrivyClient.php');

class Tasks
{
    /**
     * @var $client
     */
    private $client;

    /**
     * Tasks constructor.
     * @param $client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @return json array
     */
    public function GetList()
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('GET', ArrivyClient::TASK_ENTITY_URL, false);
        // api result
        return $response;
    }

    /**
     * @param $task_id
     * @return json array
     */
    public function GetById($task_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('GET', ArrivyClient::TASK_ENTITY_URL . "/" . $task_id, false);
        // api result
        return $response;
    }

    /**
     * @param array $payload
     * @return json array
     */
    public function Create(array $payload)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('POST', ArrivyClient::TASK_ENTITY_URL . ArrivyClient::ACTION_NAME_NEW, $payload);
        // api result
        return $response;
    }

    /**
     * @param array $payload
     * @param $task_id
     * @return json array
     */
    public function Update(array $payload, $task_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('PUT', ArrivyClient::TASK_ENTITY_URL . "/" . $task_id, $payload);
        // api result
        return $response;
    }

    /**
     * @param $task_id
     * @return json array
     */
    public function Delete($task_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('DELETE', ArrivyClient::TASK_ENTITY_URL . "/" . $task_id, false);
        // api result
        return $response;
    }
}