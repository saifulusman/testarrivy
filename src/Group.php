<?php

require_once('ArrivyClient.php');

class Group
{
    /**
     * @var $client
     */
    private $client;

    /**
     * Group constructor.
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
        $response = $this->client->callAPI('GET', ArrivyClient::GROUPS_URL, false);
        // api result
        return $response;
    }

    /**
     * @param $group_id
     * @return json array
     */
    public function GetById($group_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('GET', ArrivyClient::GROUPS_URL . "/" . $group_id, false);
        // api result
        return $response;
    }

    /**
     * @param array $payload
     * @return json array
     */
    public function Create(array $payload)
    {// $payload is an array send from request
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('POST', ArrivyClient::GROUPS_URL . ArrivyClient::ACTION_NAME_NEW, $payload);
        // api result
        return $response;
    }

    /**
     * @param array $payload
     * @param $group_id
     * @return json array
     */
    public function Update(array $payload, $group_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('PUT', ArrivyClient::GROUPS_URL . "/" . $group_id, $payload);
        // api result
        return $response;
    }

    /**
     * @param $group_id
     * @return json array
     */
    public function Delete($group_id)
    {
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('DELETE', ArrivyClient::GROUPS_URL . "/" . $group_id, false);
        // api result
        return $response;
    }
}