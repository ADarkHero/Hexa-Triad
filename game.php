<?php
    include 'menu.php';
    include 'data/attack.php';
    include 'data/card.php';
    include 'data/effect.php';
    include 'data/hand.php';


    $id = $_GET["id"];

    echo '<meta http-equiv="refresh" content="30;URL=\'game.php?id='.$id.'\'" />';





/**********************************************************************************************************************
 * Join Game
 **********************************************************************************************************************/

if(isset($_GET["join"])){
    $deck = $_GET["deck"];
    joinGame($id, getUserID(), $deck);
}












/**********************************************************************************************************************
 * Is the user player blue or player red? (or spectator)? (+Game Status)
 **********************************************************************************************************************/
    $redplayer = false;
    if(getRedPlayer($id) == getUserID($id)){
        $redplayer = true;
    }

    $blueplayer = false;
    if(getBluePlayer($id) == getUserID($id)){
        $blueplayer = true;
    }

    $gamestatus = getGameStatus($id);
    $bluewin = "";
    $redwin = "";
    if($gamestatus == 2){
        $bluewin = "lost.";
        $redwin = "WON!";
    }
    if($gamestatus == 3){
        $bluewin = "WON!";
        $redwin = "lost.";
    }
    if($gamestatus == 5){
        $bluewin = "draw.~";
        $redwin = "draw.~";
    }










    $players = getGamePlayers($id);
    $players[0] = parseUserID($players[0]);
    $players[1] = parseUserID($players[1]);
/**********************************************************************************************************************
 * Show Blue Hand
 **********************************************************************************************************************/
    $reloader = "<br /><br /><a href='game.php?id=".$id."'> <img src='image/reload.png' /></a>";

    echo '<div id="blue">';
    echo "<h2>".$players[0]." ".$bluewin."</h2>";

    $blueHand = new hand(getBlueHand($id), false);
    if(!$blueplayer){ $blueHand->showHand(); } else {
        $hand = $blueHand;
        $blueHand->showYourHand($id);
        echo $reloader;
    }

    echo "</div>";


/**********************************************************************************************************************
 * Show Red Hand
 **********************************************************************************************************************/
    echo '<div id="red">';
    echo "<h2>".$players[1]." ".$redwin."</h2>";

    $redHand = new hand(getRedHand($id), false);
    if(!$redplayer){ $redHand->showHand(); } else{
        $hand = $redHand;
        $redHand->showYourHand($id);
        echo $reloader;
    }

    echo "</div>";




echo '<div id="field">';




/**********************************************************************************************************************
 * Play a card (& display chosen one)
 **********************************************************************************************************************/
if(isset($_GET["card"]) && $_GET["card"] != 0){
    if($redplayer){
        echo '<div id="chosencardred">';
    }
    else{
        echo '<div id="chosencard">';
    }

    $chosencard = new card($_GET["card"], false);
    $chosencard->displayyourcard($id);
    echo '</div>';
}


$turn = getTurn($id);
$yourturn = false;

if($turn%2 == 0){
    if(getRedPlayer($id) == getUserID($id)){ $yourturn = true; }
}
else {
    if(getBluePlayer($id) == getUserID($id)) { $yourturn = true; }
}

$field = new hand(getField($id), true);
if(isset($_GET["position"]) && isset($_GET["card"]) && $_GET["card"] != 0 && $yourturn == true){
    $attack = new attack($id, $_GET["position"], $_GET["card"], getUserID(), $field, $hand);
    $endturn = $attack->attack();
    $field = new hand(getField($id), true);
}


/**********************************************************************************************************************
 * Show Blue Player Points
 **********************************************************************************************************************/
echo '<center><h2 style="color: #000077;">'.getBluePoints($id).'</h2>';










/**********************************************************************************************************************
 * Configurate end turn (button)
 **********************************************************************************************************************/
    if(isset($_POST["endturn"])){
        $endturn = $_POST["endturn"];
    }

    if($turn != 0){
        if($turn%2 == 0){
            if(getRedPlayer($id) == getUserID($id)){
                $buttonmsg = "Your turn, ".$players[1]."!";

                if(isset($endturn)){
                    if($endturn){
                        $turn++;
                        nextTurn($turn, $id, getUserID($id)); //Database call
                        $yourturn = false;
                        $buttonmsg = $players[0]."s turn.";
                        echo '<meta http-equiv="refresh" content="0;URL=\'game.php?id='.$id.'\'" />';
                    }
                }
            }
            else{
                $buttonmsg = $players[1]."s turn.";
            }
        }
        else{
            if(getBluePlayer($id) == getUserID($id)){
                $buttonmsg = "Your turn, ".$players[0]."!";

                if(isset($endturn)){
                    if($endturn){
                        $turn++;
                        nextTurn($turn, $id, getUserID($id)); //Database call
                        $yourturn = false;
                        $buttonmsg = $players[1]."s turn.";
                        echo '<meta http-equiv="refresh" content="0;URL=\'game.php?id='.$id.'\'" />';
                    }
                }
            }
            else{
                $buttonmsg = $players[0]."s turn.";
            }
        }
    }
    else{
        $yourturn = false;
        $buttonmsg = "Waiting for opponent...";
    }





/**********************************************************************************************************************
 * Show turns & end turn button
 **********************************************************************************************************************/
?>




<form action="#" method="post">
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    <input type="submit" <?php if(!$yourturn){ echo 'disabled'; } ?> value="<?php echo 'Turn '.getTurn($id).' - '.$buttonmsg; ?>">
</form>






<?php
/**********************************************************************************************************************
 * Show Red Player Points
 **********************************************************************************************************************/
    echo '<h2 style="color: #770000;">'.getRedPoints($id).'</h2></center>';
    echo '<br />';
    echo '<br />';









/**********************************************************************************************************************
 * Show Field
 **********************************************************************************************************************/
    if(isset($_GET["card"])){
        $fieldcard = $_GET["card"];
    }
    else{
        $fieldcard = 0;
    }
    $field->showField($id, $fieldcard);

echo "</div>";

?>