<?php

Class Auth {

    private $authId;
    private $authUserName; 
    private $authPassword;
    private $authToken;
    private $userId;
    private $is_AUTH;
    private $errors = array();
    private $succes = array();
    public  $session;
    public  $db;

    // Methods 
    public function initSession() {
        
        // Init a new Session
        $this->session = new BackendSession($this->authToken, $this->userId, time(), $this->db, "backend");
        
    }
    public function encryptPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function setSession() {
        
    }

    public function logUser($db, $username, $password, $redirect = FALSE) {
        
        if ($db) {
            if ($username) {
                
                // Build Query
                $sql = "SELECT * FROM users WHERE username='$username'";

                // Fetch Result
                $user = $db->getData($sql);
                
                // If a user with this username exist
                if (count($user) > 0) {
                    
                    // Compare password
                    if ($this->verifyPassword($password, $user[0]["password"])) {
            
                        // Get user Id
                        $userId = $user[0]["id"];
                        
                        // Build a query
                        $sql = "UPDATE users SET isLog=1 WHERE id=$userId";

                        // Process the user login
                        if ($db->queryDb($sql)) {
                      
                            // Then generate a session token
                            $this->setAuthToken();
                            $this->setUserId($userId);

                            return true;
                        }
                    }
                } else {
                    $this->setErrors("Bummer");
                }
            }
        }
    }

    private function verifyPassword($passwordEntry, $hash) {
        if (password_verify($passwordEntry, $hash)) {
            return true;
        } else {
            
            return false;
        }
    }
    public function authUser($username) {

        $query = "SELECT * FROM users where username = '$username'";

        $usernameState = $this->db->lookForRecords($query);
        
        // If a username is matching
        if($usernameState) {
            
            var_dump($this->getPassword());
        } else {
            $this->setErrors("No Username matching");
        }
        var_dump($this->errors);

    }

    private function populateToken($tokenOptions = false) {

        if ($tokenOptions) {
            if(isset($tokenOptions["alpha-numeric"])) {
               $token = md5(uniqid(rand(0,10000) + rand(0,333) * rand(0,pow(2,32)), true));
            }
            if(isset($tokenOptions["numeric"])) {
               $token = rand(0,50000) * rand(0,50000);
            }
            return $token;
        } else {
    
            // If nothing is set simply return an alpha numeric token
            return md5(uniqid(rand(0,10000) + rand(0,333) * rand(0,pow(2,32)), true));
        }
    
    }

    /* Getters and setters */
    public function setId($id) {
        $this->authId = $id;
    }

    public function getId() {
        return $this->authId;
    }

    public function getAuthToken() {

    }
    public function setUserId($userId) {
        $this->userId = $userId;
    }
    private function setAuthToken() {
        
        echo "Setting token";
        $this->authToken = $this->populateToken();

    }    
    public function setauthUserName($username) {
        
        $this->username = $username;
    }

    public function getusername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->authPassword;
    }

    public function setPassword($password) {
        $this->authPassword = $this->encryptPassword($password);
     
    }

    public function setErrors($errorMessage, $status = false) {

        $this->errors[] = $errorMessage;

    }

    public function getErrors() {

        return $this->errors;
    }

    public function setSucces($successMessage, $status = false) {

        $this->succes[] = $successMessage;

    }
    
    public function getSucces() {

        return $this->succes;
    }

    
}