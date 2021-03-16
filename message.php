<?php

require("./app/Message.php");

$message = new Message($_POST["title"], $_POST["content"],$_POST["time"]);

if($pikachu->isConnected()) {
  header('Location: success.php');
} else {
  header('Location: error.php');
}
