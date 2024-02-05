<?php
class DB
{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;
    function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->dbname = "guestBook";
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    }
    function insert($sql)
    {
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    function select($sql)
    {
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>