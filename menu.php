<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>HexaTriad</title>
<link href="template/css/main.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <div id="centering">
        <?php

           include 'database.php';
            if(!isset($_SESSION["username"]))
            {
                die("Please log in first. <a href=\"index.php\">Klick me!</a>");
            }
            ?>

            <a href="home.php">Home</a> |
            <a href="lobby.php">Gamelobby</a> |
            Deck |
            Shop |
             <a href="help.php">Help/Glossary</a> |
            Changelog |
            <a href="admin/index.php">Adminmenu</a> |
            <a href="index.php">Log out</a>


            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;