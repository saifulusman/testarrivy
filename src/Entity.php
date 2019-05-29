<?php

require_once('ArrivyClient.php');

class Entity
{

    /**
     * @var ArrivyClient
     */
    private $client;

    /**
     * Entity constructor.
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
        $response = $this->client->callAPI('GET', ArrivyClient::ENTITY_URL, false);
        // api result
        return $response;
    }

    /**
     * @param $entity_id
     * @return json array
     */
    public function GetById($entity_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('GET', ArrivyClient::ENTITY_URL . "/" . $entity_id, false);
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
        $response = $this->client->callAPI('POST', ArrivyClient::ENTITY_URL . ArrivyClient::ACTION_NAME_NEW, $payload);
        // api result
        return $response;
    }

    /**
     * @param array $payload
     * @param $entity_id
     * @return json array
     */
    public function Update(array $payload, $entity_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('PUT', ArrivyClient::ENTITY_URL . "/" . $entity_id, $payload);
        // api result
        return $response;
    }

    /**
     * @param $entity_id
     * @return json array
     */
    public function Delete($entity_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('DELETE', ArrivyClient::ENTITY_URL . "/" . $entity_id, false);
        // api result
        return $response;
    }
}