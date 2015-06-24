<?php

include 'menu.php';

/**********************************************************************************************************************
 * Userinfo
 **********************************************************************************************************************/
$userinfo = getUserInfo();
echo "<h3>".$userinfo[1]."</h3>";
echo '<img src="'.$userinfo[8].'" height="100px" width="100px"><br />';
echo parseUserRight($userinfo[4])."<br />"."<br />";
echo "Current wins: ".$userinfo[7]."<br />";
echo "Current gold: ".$userinfo[5]."<br />";
echo "Current diamond: ".$userinfo[6];



?>