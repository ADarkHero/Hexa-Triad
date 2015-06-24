<?php
session_start();
error_reporting(0);
include 'database.php';


/**********************************************************************************************************************
 * Login Check
 **********************************************************************************************************************/
$username = $_POST["username"];
$password = md5($_POST["password"]);

$query = "SELECT Username, UserPassword FROM user WHERE Username LIKE '$username' LIMIT 1";
$result = mysql_query($query);
$row = mysql_fetch_object($result);

if($row->UserPassword == $password || !isset($_SESSION["username"]))
{
    $_SESSION["username"] = $username;
    echo 'Success! <a href="home.php">Click me!</a>';
    echo '<meta http-equiv="refresh" content="0;URL=\'home.php" />';
}
else
{
    echo "Wrong login data! <a href=\"index.php\">Try again!</a>";
}

?>