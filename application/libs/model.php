<?php
    class Model {
        /**
         *
         * @var PDO A PDO database connection
         */
        protected $db;
        
        /**
        * Every model needs a database connection, passed to the model
        * @param object $db A PDO database connection
        */
       function __construct($db) {
           try {
               $this->db = $db;
           } catch (PDOException $e) {
               exit('Database connection could not be established.');
           }
       }
    }
    