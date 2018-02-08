<?php
Class BackendSession {

    public $token;
    public $userId;
    public $initTime;
    public $db;
    public $sessionType;
    public $sessionId;

    function __construct($token, $userId, $time, $db, $sessionType, $sessionId) {

        $this->token = $token;
        $this->userId = $userId;
        $this->time= $time;
        $this->db = $db;
        $this->sessionType = $sessionType;
        $this->sessionId = $sessionId;
    }

    public function stampNewSessionInDb() {
        $now = time();

        $sql = "INSERT INTO users_sessions (uid, token, startTime, sessionType, sid)

        values ('$this->userId', '$this->token', '$now', '$this->sessionType', '$this->sessionId')";
        if($this->db->queryDb($sql)) {

            $this->setClientSession($this->userId, $this->sessionId, $this->token);
            header("Location: http://localhost:8888/artbox/art2k18/dist/utils/chameleon-pannel/admin.php");
        }
    }

    // Void
    public function setClientSession($uid,$sid, $token) {
        $_SESSION["uid"] =
        $_SESSION["sid"] = $sid;
        $_SESSION["sessionToken"] = $token;
        $_SESSION["is_log"] = true;

    }
}
