<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>
    <form action="message.php" method="POST">
        <input type="text" name="title" id="title" ><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <input type="hidden" name="time" id="time" >
        <button type="submit" >Envoyer</button>
    </form>

</body>
</html>