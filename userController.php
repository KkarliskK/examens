<?php
include '../model/messageModel.php';

$obj = new Message;

if(isset($_POST['name']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $object = [
        'name' => $name,
        'email' => $email,
        'message' => $message,
        'errName' => '',
        'errEmail' => '',
        'errMessage' => '',
        'msg' => '',
    ];

    if(empty($_POST['name'])){
            $object['errName'] = "Name field is empty!";
        }if(empty($_POST['email'])){
            $object['errEmail'] = "Email field is empty!";
        }if(empty($_POST['message'])){
            $object['errMessage'] = "Message field is empty!";
        }
    
    if(empty($object['errName'])&& empty($object['errEmail']) && empty($object['errMessage'])){
        $object['msg'] = "Success!!";
        $obj->insert($name, $email, $message);
    }

    echo json_encode($object);
}


?>