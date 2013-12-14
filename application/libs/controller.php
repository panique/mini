<?php

/**
 * This is the "base controller class". All other "real" controllers extend this class.
 */
class Controller
{
    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * Whenever a controller is created, also open a database connection
     */
    function __construct()
    {
        $this->openDatabaseConnection();
    }

    /**
     * Opens the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        // generate a database connection, using the PDO connector
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);
    }

    /**
     * loads the model with the given name.
     * loadModel("test_model") would include models/test_model.php and create the object $this->model in the controller
     * @param $model_name string The name of the model
     * @return object
     */
    public function loadModel($model_name)
    {
        require 'application/models/' . $model_name . '.php';
        // return new model (and passing the database connection to the model)
        return new $model_name($this->db);
    }
}
