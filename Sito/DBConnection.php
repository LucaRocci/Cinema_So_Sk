<?php
    require("DBConnectionException.php");

    class DBConnection{

        private string $hostname = "localhost";
        private string $dbuser = "root";
        private string $dbpwd = "";
        private string $db = "cinema";
        private $conn = null;

        public function __construct()
        {
            try{
                $this->conn = new mysqli($this->hostname, $this->dbuser, $this->dbpwd,$this->db);
            }catch(mysqli_sql_exception $e){
                throw new DBConnectionException("Cannot create connection to the database",500);
            }
        }

        public function selectQuery($query): array{

            $result = $this->conn->query($query);
            
            if($result->num_rows < 1){
                throw new DBConnectionException("Film not found!",404);
            }

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function close(){
            $this->conn->close();
        }

    }