<?php

require_once('ArrivyClient.php');
class Template
{
    /**
     * @var $client
     */
    private $client;

    /**
     * Template constructor.
     * @param $client
     */
    public  function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @return json array
     */
    public function GetList(){
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('GET', ArrivyClient::TEMPLATES_URL, false);
        // api result
        return $response;
    }

    /**
     * @param $template_id
     * @return json array
     */
    public function GetById($template_id){
        // call callAPI  method from ArrivyClient class
        $response = $this->client->callAPI('GET',ArrivyClient::TEMPLATES_URL."/".$template_id, false);
        // api result
        return $response;
    }
}