<?php
    
$username = $_POST["username"];
$password = $_POST["password"];

/*** 
// example of hard-coded credentials
if ($username == "admin" && $password == "admin") {
    echo "Login Successful!";
} else {
    echo "Login Failed!";
}
***/

/***
// example of iterating over all users via quering gwitter database
$db = new SQLite3('gwitter.db');

$results = $db->query('SELECT * from user');
while ($row = $results->fetchArray()) {
    echo '<br/>';
    echo "Displaying user: " . $row['username'] . " with password: " . $row["password"];
}
***/

$db = new SQLite3('gwitter.db');

$results = $db->query('SELECT * from user');
while ($row = $results->fetchArray()) {
    if ($row["username"] == $username && $row["password"] == $password) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: /profile.php");
        break;
    } else {
        echo "User not found! <br/>";
        die();
    }
}

?>
