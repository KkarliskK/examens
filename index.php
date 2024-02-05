<?php 

include '../controller/messageController.php';

$messages = index();

//print_r($messages);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Examens</title>
</head>
<body>
    <div class="form-container">
        <form id="insertForm" name="insertForm" method="post">
            <h1>Insert a message</h1>
            <input 
                type="text"
                placeholder="Vārds"
                id="name"
                name="name"
            >
            <p id="errName"></p>
            <input 
                type="text"
                placeholder="e-pasts"
                id="email"
                name="email"
            >
            <p id="errEmail"></p>
            <input 
                type="text"
                placeholder="Ziņojums"
                id="message"
                name="message"
            >
            <p id="errMessage"></p>
            <p id="msg"></p>
            <button name="submitButton" id="submitButton" onclick="submitt()">Submit Message</button>
        </form>
    </div>
    <div class="messages-container">
        <h1>Latest messages:</h1>
        <div class="button-conatiner">
            <button class="sort-btn" value="time_added ASC">Sort by date Up</button>
            <button class="sort-btn" value="time_added DESC">Sort by date Down</button>
            <button class="sort-btn" value="name ASC">Sort by name ASC</button>
            <button class="sort-btn" value="name DESC">Sort by name DSC</button>
        </div>
            <?php foreach ($messages['messages'] as $message){  ?>
                <div class="message-container">
                    <p>User: <?php  echo $message['name']; ?></p>
                    <p>Email: <?php  echo $message['email']; ?></p>
                    <p>Message: <?php  echo $message['message']; ?></p>
                    <p>Date: <?php  echo $message['time_added']; ?></p>
                </div>
            <?php }?>
    </div>

    <script src="functions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>