<?php
Class BackendSession {

    public $token; 
    public $userId;
    public $initTime;
    public $db;
    public $sessionType;

    function __construct($token, $userId, $time, $db, $sessionType) {

        $this->token = $token;
        $this->userId = $userId;
        $this->time= $time;
        $this->db = $db;
        $this->sessionType = $sessionType;
    }

    public function stampNewSessionInDb() {
        $now = time();
        
        $sql = "INSERT INTO users_sessions (uid, token, startTime, sessionType) 
        
        values ('$this->userId', '$this->token', '$now', '$this->sessionType')";
        if($this->db->queryDb($sql)) {

                                
        }        
    } 
}
