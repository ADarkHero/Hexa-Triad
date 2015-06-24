<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HexaTriad - Admincorner</title>
    <link href="../template/css/main.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

<div id="centering">
    <?php
    include '../database.php';
    $userinfo = getUserInfo();
    if(!isset($_SESSION["username"]) || $userinfo[4] != 1)
    {
        die("Not enought rights! <a href=\"../home.php\">Back home...</a>");
    }
    ?>

    <a href="../home.php">Back</a> |
    <a href="cardcreator.php">Card creator</a>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
