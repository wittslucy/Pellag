<?php

    require_once 'Database/MY_PDO.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    class Model
    {
        protected $pdo;

        public function __construct()
        {
            $this->pdo = MY_PDO::getInstance();
        }
    }