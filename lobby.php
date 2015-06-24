<?php
    include 'menu.php';

    $deck = 0; //TODO
    if(isset($_POST["creategame"])){
        if($_POST["gamename"] != ""){
            createGame(getUserID(), $_POST["gamename"], $_POST["creategame"], $_POST["deck"]);
            echo "Game created!";
        }
        else{
            echo "Please specify lobby name!";
        }
    }

?>

<h2>Your Games</h2>

<?php
    $uid = getUserID();
    $yourgames = getYourGames($uid);

    for($i = 0; $i < sizeof($yourgames); $i++){
        $opponent = parseGameOpponent($yourgames[$i], $uid);
        echo 'Game versus '.$opponent.': <a href="game.php?id='.$yourgames[$i].'">'.getGameName($yourgames[$i]).'</a><br />';
    }
?>

<h2>Create Game</h2>

<form action="lobby.php" method="post">
    <input type="text" size="50" name="gamename" placeholder="Lobby Name">
    <select name="creategame">
        <option value="blue">Blue side</option>
        <option value="red">Red side</option>
    </select>
    <input type="hidden" value="0" name="deck">
    <input type="submit" value="Create new game!">
</form>

<h2>Join Game</h2>
<?php
    $opengames = getOpenGames($uid);

    $available = 0;
    for($i = 0; $i < sizeof($opengames); $i++){
        $opponent = parseGameOpponent($opengames[$i], $uid);
        if($opponent == "undefined"){
            echo 'Game from '.$opponent.': <a href="game.php?id='.$opengames[$i].'&join=true&deck='.$deck.'">'.getGameName($opengames[$i]).'</a><br />';
            $available++;
        }
    }

    if($available == 0){
        echo "No other games available! Create one!";
    }
?>