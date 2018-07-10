<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do Lists</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="list">
    <h1 class="header">Let's do this.</h1>
    <ul class="items">
        <li>
            <span class="item done">Sample Task</span>
        </li>
        <li>
            <span class="item">Shopping</span>
            <a href="#" class="done-button">Mark as done</a>
        </li>
    </ul>
    <form class="item-add" action="add.php" method="post">
        <input type="text" name="name" placeholder="Type your tasks here." class="input" autocomplete="off" required>
        <input type="submit" value="Add" class="submit">
    </form>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: deepika
 * Date: 10/07/18
 * Time: 6:50 AM
 */
?>
</body>
</html>