<?php
include '../model/messageModel.php';

function index()
{
    $obj = new Message;
    $sort = isset($_POST['sort']) ? $_POST['sort'] : 'time_added DESC';

    $allowed_sort_values = ['time_added ASC', 'time_added DESC', 'name ASC', 'name DESC'];
    if (!in_array($sort, $allowed_sort_values)) {
        $sort = 'time_added DESC';
    }

    $message = $obj->select($sort);

    $messages = [
        "messages"=> $message,
    ];

    return $messages;
}
