<?php
include '../db/Database.php';
class Message
{
    private $obj;

    function __construct()
    {
        $this->obj = new DB;
    }

    function select($sort = 'time_added DESC')
    {
        
        $allowed_sort_values = ['time_added ASC', 'time_added DESC', 'name ASC', 'name DESC'];
        if (!in_array($sort, $allowed_sort_values)) {
            $sort = 'time_added DESC';
        }
    
        $result = $this->obj->select("SELECT * FROM messages ORDER BY $sort");
        return $result;
    }
    

    function insert($name, $email, $message)
    {
        $insertMessage = $this->obj->insert("INSERT INTO messages (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')");
        return $insertMessage;
    }
}
?>