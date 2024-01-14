<?php

$db = new mysqli("localhost", "root", "", "test");

if ($db->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $db->connect_error);
}



$db->set_charset("utf8");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Screen</title>
</head>

<body>
    <div>
        <h1>Login Screen</h1>
        <form>
            <span>Username</span>
            <input type="text">
            <br>
            <span>Password</span>
            <input type="text">
            <br>
            <input type="submit" value="Giriş Yap"></input>
        </form>
    </div>
</body>

</html>