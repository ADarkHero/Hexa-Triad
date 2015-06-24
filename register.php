<?php
include 'database.php';

error_reporting(0);

$username = $_POST["username"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$email = $_POST["mail"];

if($password != $password2 OR $username == "" OR $password == "" OR $email == "")
{
    echo "Failure. Missed username/mail or your passwords aren't the same!  <a href=\"index.php\">Try again!</a>";
    exit;
}
$password = md5($password);

$result = mysql_query("SELECT UserID FROM user WHERE Username LIKE '$username'");
$set = mysql_num_rows($result);

if($set == 0)
{
    $query = "INSERT INTO user (Username, UserPassword, UserMail, UserRight, UserGold, UserDiamond, UserWins, UserAvatar)
    VALUES ('$username', '$password', '$email', '0', '100', '1', '0', 'avatar/default.png')";
    $executequery = mysql_query($query);

    if($executequery == true)
    {
        echo "User <b>$username</b> was created successfully. <a href=\"index.php\">Login!</a>";
    }
    else
    {
        echo "Failure at accessing the database. <a href=\"index.php\">Try again!</a>";
    }


}

else
{
    echo "User already exists! <a href=\"index.php\">Try again!</a>";
}
?>