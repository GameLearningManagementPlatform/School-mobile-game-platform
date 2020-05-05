<?php

    class Database {
        // private $host = 'localhost';
        // private $db_name = 'gmlp';
        // private $username = 'root';
        // private $password = '';

        private $host = 'ol5tz0yvwp930510.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
        private $db_name = 'tyegkr1szm5vwd8a';
        private $username = 'l104kv1o1q6abaz1';
        private $password = 'f938oeksqmcobz70';

        private $conn;

        // DB Connect
        public function connect() {
            $this->conn = null;

            try { 
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch(PDOException $e) {
                echo 'Connection Error: ' . $e->getMessage();
            }

            return $this->conn;
        }
    }