<?php

require_once('ArrivyClient.php');

class Resource
{
    /**
     * @var $client
     */
    private $client;

    /**
     * Resource constructor.
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
        $response = $this->client->callAPI('GET', ArrivyClient::RESOURCES_URL, false);
        // api result
        return $response;
    }

    /**
     * @param $resource_id
     * @return json array
     */
    public function GetById($resource_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('GET', ArrivyClient::RESOURCES_URL . "/" . $resource_id, false);
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
        $response = $this->client->callAPI('POST', ArrivyClient::RESOURCES_URL . ArrivyClient::ACTION_NAME_NEW, $payload);
        // api result
        return $response;
    }

    /**
     * @param array $payload
     * @param $resource_id
     * @return json array
     */
    public function Update(array $payload, $resource_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('PUT', ArrivyClient::RESOURCES_URL . "/" . $resource_id, $payload);
        // api result
        return $response;
    }

    /**
     * @param $resource_id
     * @return json array
     */
    public function Delete($resource_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('DELETE', ArrivyClient::RESOURCES_URL . "/" . $resource_id, false);
        // api result
        return $response;
    }
}