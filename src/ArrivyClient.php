<?php

require_once('Tasks.php');
require_once('TaskStatus.php');
require_once('Entity.php');
require_once('Resource.php');
require_once('Group.php');
require_once('Template.php');
class ArrivyClient
{
    // define the base path
    private $PRODUCTION_PATH = "https://www.arrivy.com/api";
    private $BASE_PATH = '';
    private $SANDBOX_PATH = "https://sandbox.arrivy.com/api";
// defined entity name in ulr
    const TASK_ENTITY_URL = "/tasks";
    const TASK_ESTIMATE_ENTITY_URL = "/estimate";
    const TASK_STATUS_ENTITY_URL = "/status";
    const ENTITY_URL = "/entities";
    const RESOURCES_URL = "/resources";
    const GROUPS_URL = "/groups";
    const TEMPLATES_URL = "/templates";


// defined entity action in ulr
    const ACTION_NAME_NEW = "/new";

    // set properties
    private $X_AUTH_KEY = "";
    private $X_AUTH_TOKEN = "";

    /**
     * @var Tasks $tasks
     */
    public $tasks;
    /**
     * @var TaskStatus $taskStatus
     */
    public $taskStatus;
    /**
     * @var Entity $entity
     */
    public $entity;
    /**
     * @var Resource $resource
     */
    public $resource;
    /**
     * @var Group $group
     */
    public $group;
    /**
     * @var Template $template
     */
    public $template;
    /**
     * ArrivyClient constructor.
     * @param $X_AUTH_KEY
     * @param $X_AUTH_TOKEN
     * @param null $ENVIROMENT
     */
    public function __construct($X_AUTH_KEY, $X_AUTH_TOKEN, $ENVIROMENT = null)
    {
        // set enviroment sent from request
        if (!empty($ENVIROMENT)) {
            if (strtoupper($ENVIROMENT) == 'SANDBOX') {
                $this->BASE_PATH = $this->SANDBOX_PATH;
            } else if (strtoupper($ENVIROMENT) == 'PRODUCTION') {
                $this->BASE_PATH = $this->PRODUCTION_PATH;
            } else {
                $this->BASE_PATH = $this->SANDBOX_PATH;
            }
        } else {
            $this->BASE_PATH = $this->SANDBOX_PATH;
        }
        // set authentication
        $this->X_AUTH_KEY = $X_AUTH_KEY;
        $this->X_AUTH_TOKEN = $X_AUTH_TOKEN;
        // initialize object
        $this->tasks = new Tasks($this);
        $this->taskStatus = new TaskStatus($this);
        $this->entity = new Entity($this);
        $this->resource = new Resource($this);
        $this->group = new Group($this);
        $this->template = new Template($this);
    }

    /**
     * @return array
     */
    public function GetAuth()
    {
        // bind array to pas request header for authentication
        return $auth_data = [
            "Accept: application/json",
            "X-Auth-Key: " . $this->X_AUTH_KEY,
            "X-Auth-Token: " . $this->X_AUTH_TOKEN,
            "Content-type: application/x-www-form-urlencoded"
        ];
    }

    public function callAPI($method, $endpoint, $data)
    {
        //print_r($data);
        //exit();
        $curl = curl_init();
        $url = $this->BASE_PATH . $endpoint;
        //die($url);
        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->GetAuth());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // EXECUTE:
        $result = curl_exec($curl);
        if (!$result) {
            die("Connection Failure");
        }
        curl_close($curl);
        return $result;
    }
}
