<?php
Class Db {

    private $servername;
    private $username;
    private $password;
    private $databaseName;
    public $db;
    public function __construct($_server, $_username ,$_password, $_database) {

        $this->setServerName($_server);
        $this->setUsername($_username);
        $this->setPassword($_password);
        $this->setDatabaseName($_database);

        $this->db = new mysqli($this->servername, $this->username, $this->password, "artbox2k18");
        // Check connection
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }

    }

    public function setServerName($servername) {
        $this->servername = $servername;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setDatabaseName($databaseName) {
        $this->databaseName = $databaseName;
    }

    public function setDb($dbObject) {
        $this->db = $dbObject;
    }

    public function getDb() {
        return $this->db;
    }

    // Data Processing

    public function queryDb($sql) {
        if ($this->db->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->error;
        }
    }

    public function getData($sql) {

        $result = $this->db->query($sql);
        $data = array();
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        } else {

        }
        return $data;
    }

    public function test() {
        echo "Rihanna Umbrealla";
    }
}
