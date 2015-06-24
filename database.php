<?php
/**********************************************************************************************************************
 **********************************************************************************************************************
 * Database Configuration
 **********************************************************************************************************************
 **********************************************************************************************************************/

    session_start();

    $host = getHost();
    $user = getUser();
    $pass = getPassword();
    $db = getDatabase();




    $verbindung = mysql_connect ($host, $user, $pass)			        	    //MySQL Verbindung aufbauen
    or die ("keine Verbindung möglich.
             Benutzername oder Passwort sind falsch");						    //Falscher Username/Password

    mysql_select_db($db)												        //Datenbank auswählen
    or die ("Die Datenbank existiert nicht.");							        //Verbindung gescheitert






    function getHost(){ return "localhost"; }
    function getUser(){ return "root"; }
    function getPassword(){ return ""; }
    function getDatabase(){ return "hexatriad"; }
    function getUsername(){ return $_SESSION["username"]; }






/**********************************************************************************************************************
 **********************************************************************************************************************
 * Read Stuff from the DB
 **********************************************************************************************************************
 **********************************************************************************************************************/


/**********************************************************************************************************************
 * Logged In User
 **********************************************************************************************************************/
function getUserID(){
    $sql = "SELECT UserID FROM user WHERE Username LIKE '".getUsername()."'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $userInfo = $ar["UserID"];

        }
    }

    return $userInfo;
}

function getUserInfo(){
    $userInfo = array();
    $sql = "SELECT * FROM user WHERE Username LIKE '".getUsername()."'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $userInfo[0] = $ar["UserID"];
            $userInfo[1] = $ar["Username"];
            $userInfo[2] = $ar["UserPassword"];
            $userInfo[3] = $ar["UserMail"];
            $userInfo[4] = $ar["UserRight"];
            $userInfo[5] = $ar["UserGold"];
            $userInfo[6] = $ar["UserDiamond"];
            $userInfo[7] = $ar["UserWins"];
            $userInfo[8] = $ar["UserAvatar"];


        }
    }

    return $userInfo;
}

function getUserInfoForUser($user){
    $userInfo = array();
    $sql = "SELECT * FROM user WHERE Username LIKE '".$user."'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $userInfo[0] = $ar["UserID"];
            $userInfo[1] = $ar["Username"];
            $userInfo[2] = $ar["UserPassword"];
            $userInfo[3] = $ar["UserMail"];
            $userInfo[4] = $ar["UserRight"];
            $userInfo[5] = $ar["UserGold"];
            $userInfo[6] = $ar["UserDiamond"];
            $userInfo[7] = $ar["UserWins"];
            $userInfo[8] = $ar["UserAvatar"];


        }
    }

    return $userInfo;
}














/**********************************************************************************************************************
 * Blue Hand
 **********************************************************************************************************************/
    function getBlueHand($id){
        $blueHand = array();
        $sql = "SELECT * FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $blueHand[1] = $ar["FieldHandB01"];
                $blueHand[2] = $ar["FieldHandB02"];
                $blueHand[3] = $ar["FieldHandB03"];
                $blueHand[4] = $ar["FieldHandB04"];
                $blueHand[5] = $ar["FieldHandB05"];
                $blueHand[6] = $ar["FieldHandB06"];
                $blueHand[7] = $ar["FieldHandB07"];
                $blueHand[8] = $ar["FieldHandB08"];
                $blueHand[9] = $ar["FieldHandB09"];
                $blueHand[10] = $ar["FieldHandB10"];

            }
        }

        return $blueHand;
    }
















/**********************************************************************************************************************
 * Red Hand
 **********************************************************************************************************************/
    function getRedHand($id){
        $redHand = array();
        $sql = "SELECT * FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $redHand[1] = $ar["FieldHandR01"];
                $redHand[2] = $ar["FieldHandR02"];
                $redHand[3] = $ar["FieldHandR03"];
                $redHand[4] = $ar["FieldHandR04"];
                $redHand[5] = $ar["FieldHandR05"];
                $redHand[6] = $ar["FieldHandR06"];
                $redHand[7] = $ar["FieldHandR07"];
                $redHand[8] = $ar["FieldHandR08"];
                $redHand[9] = $ar["FieldHandR09"];
                $redHand[10] = $ar["FieldHandR10"];

            }
        }

        return $redHand;
    }


















/**********************************************************************************************************************
 * Field
 **********************************************************************************************************************/
    function getField($id){
        $field = array();
        $sql = "SELECT * FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $field[1] = $ar["Field01"];
                $field[2] = $ar["Field02"];
                $field[3] = $ar["Field03"];
                $field[4] = $ar["Field04"];
                $field[5] = $ar["Field05"];
                $field[6] = $ar["Field06"];
                $field[7] = $ar["Field07"];
                $field[8] = $ar["Field08"];
                $field[9] = $ar["Field09"];
                $field[10] = $ar["Field10"];
                $field[11] = $ar["Field11"];
                $field[12] = $ar["Field12"];
                $field[13] = $ar["Field13"];
                $field[14] = $ar["Field14"];
                $field[15] = $ar["Field15"];
                $field[16] = $ar["Field16"];
                $field[17] = $ar["Field17"];
                $field[18] = $ar["Field18"];
                $field[19] = $ar["Field19"];
                $field[20] = $ar["Field20"];
                $field[21] = $ar["Field21"];
                $field[22] = $ar["Field22"];
                $field[23] = $ar["Field23"];
                $field[24] = $ar["Field24"];
                $field[25] = $ar["Field25"];
                $field[26] = $ar["Field26"];
                $field[27] = $ar["Field27"];
                $field[28] = $ar["Field28"];
                $field[29] = $ar["Field29"];
                $field[30] = $ar["Field30"];
                $field[31] = $ar["Field31"];
                $field[32] = $ar["Field32"];
                $field[33] = $ar["Field33"];
                $field[34] = $ar["Field34"];
                $field[35] = $ar["Field35"];
                $field[36] = $ar["Field36"];


            }
        }

        return $field;
    }














/**********************************************************************************************************************
 * Information for one (temporary) card
 **********************************************************************************************************************/
    function getCardInformation($cardid){
        $card = array();
        $sql = "SELECT * FROM card WHERE CardID = '$cardid'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $card[0] = $ar["CardName"];
                $card[1] = $ar["CardTop"];
                $card[2] = $ar["CardRight"];
                $card[3] = $ar["CardBot"];
                $card[4] = $ar["CardLeft"];
                $card[5] = $ar["CardType"];
                $card[6] = $ar["CardEffect"];
                $card[7] = $ar["CardDescription"];
                $card[8] = $ar["CardRarity"];

            }
        }

        return $card;
    }

    function getTempCardInformation($cardid){
        $card = array();
        $sql = "SELECT * FROM tempcard WHERE TempCardID = '$cardid'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $card[0] = $ar["CardName"];
                $card[1] = $ar["CardTop"];
                $card[2] = $ar["CardRight"];
                $card[3] = $ar["CardBot"];
                $card[4] = $ar["CardLeft"];
                $card[5] = $ar["CardType"];
                $card[6] = $ar["CardEffect"];
                $card[7] = $ar["CardID"];
                $card[8] = $ar["TempCardOwner"];

            }
        }

        return $card;
    }

    function getCardFromPosition($id, $position){
        $card = 0;

        if($position<10){ $position = "0".$position;}
        $position = "Field".$position;

        $sql = "SELECT ".$position." FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $card = $ar[$position];

            }
        }

        return $card;
    }



/**********************************************************************************************************************
 * Turn
 **********************************************************************************************************************/
    function getTurn($id){
        $sql = "SELECT Turn FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $turn = $ar["Turn"];


            }
        }

        return $turn;
    }


/**********************************************************************************************************************
 * Blue Player ID
 **********************************************************************************************************************/
    function getBluePlayer($id){
        $sql = "SELECT PlayerBlue FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $player = $ar["PlayerBlue"];


            }
        }

        return $player;
    }

/**********************************************************************************************************************
 * Red Player ID
 **********************************************************************************************************************/
    function getRedPlayer($id){
        $sql = "SELECT PlayerRed FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $player = $ar["PlayerRed"];


            }
        }

        return $player;
    }


/**********************************************************************************************************************
 * Blue Player Points
 **********************************************************************************************************************/
    function getBluePoints($id){
        $sql = "SELECT PointsB FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $points = $ar["PointsB"];


            }
        }

        return $points;
    }

/**********************************************************************************************************************
 * Red Player Points
 **********************************************************************************************************************/
    function getRedPoints($id){
        $sql = "SELECT PointsR FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $points = $ar["PointsR"];


            }
        }

        return $points;
    }



/**********************************************************************************************************************
 * Player Color
 **********************************************************************************************************************/
    function getPlayerColor($id, $user){
        $sql = "SELECT PlayerRed FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $red = $ar["PlayerRed"];


            }
        }


        if($user == $red){
            $color = "red";
        }
        else{
            $color = "blue";
        }

        return $color;
    }


/**********************************************************************************************************************
 * Game Status
 **********************************************************************************************************************/
function getGameStatus($id){
    $sql = "SELECT Status FROM field WHERE FieldID = '$id'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $status = $ar["Status"];


        }
    }

    return $status;
}



/**********************************************************************************************************************
 * Read Effect Name
 **********************************************************************************************************************/
    function parseEffect($id){
        $sql = "SELECT EffectName FROM effect WHERE EffectID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $effect = $ar["EffectName"];


            }
        }

        return $effect;
    }

/**********************************************************************************************************************
 * Read Right Name
 **********************************************************************************************************************/
function parseUserRight($id){
    $sql = "SELECT RoleName FROM role WHERE RoleID = '$id'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $right = $ar["RoleName"];


        }
    }

    return $right;
}


/**********************************************************************************************************************
 * Read Username from ID
 ***********************************************************************************************************************/
function parseUserID($id){
    $user = "undefined";
    $sql = "SELECT UserName FROM user WHERE UserID = '$id'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $user = $ar["UserName"];


        }
    }

    return $user;
}





/**********************************************************************************************************************
 * Get Game Name
 ***********************************************************************************************************************/
function getGameName($id){
    $sql = "SELECT FieldName FROM field WHERE FieldID = '$id'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $field = $ar["FieldName"];


        }
    }

    return $field;
}



/**********************************************************************************************************************
 * Get all open games, a user is participated in
 **********************************************************************************************************************/
function getYourGames($userid){
    $sql = "SELECT FieldID FROM field WHERE (PlayerRed = '$userid' OR PlayerBlue = '$userid') AND (Status = '0' OR Status = '1')";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $games[] = $ar["FieldID"];


        }
    }

    return $games;
}



/**********************************************************************************************************************
 * Get all open games
 **********************************************************************************************************************/
function getOpenGames($user){
    $sql = "SELECT FieldID FROM field WHERE Status = '0' AND PlayerRed != '$user' AND PlayerBlue != '$user'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $games[] = $ar["FieldID"];


        }
    }

    return $games;
}



/**********************************************************************************************************************
 * Get opponent of a game
 **********************************************************************************************************************/
function parseGameOpponent($id, $uid){
    $opponentblue = "undefined";
    $opponentred = "undefined";

    $sql = "SELECT PlayerBlue, PlayerRed FROM field WHERE FieldID = '$id'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $opponentblue = $ar["PlayerBlue"];
            $opponentred = $ar["PlayerRed"];


        }
    }

    if($opponentblue != $uid){
        $op = $opponentblue;
    }
    else{
        $op = $opponentred;
    }

    return parseUserID($op);
}


/**********************************************************************************************************************
 * Get Players from game
 **********************************************************************************************************************/
function getGamePlayers($id){
    $sql = "SELECT PlayerBlue, PlayerRed FROM field WHERE FieldID = '$id'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $playerblue = $ar["PlayerBlue"];
            $playerred = $ar["PlayerRed"];


        }
    }

    $player = array($playerblue, $playerred);

    return $player;
}





/**********************************************************************************************************************
 * Get Players decks
 **********************************************************************************************************************/
function getPlayerDecks($id){
    $sql = "SELECT DeckBlue, DeckRed FROM field WHERE FieldID = '$id'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $deckblue = $ar["DeckBlue"];
            $deckred = $ar["DeckRed"];


        }
    }

    $deck = array($deckblue, $deckred);

    return $deck;
}





/**********************************************************************************************************************
 * Get tons of information
 **********************************************************************************************************************/

function getTypeNames(){
    $sql = "SELECT * FROM type";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $type[] = $ar["TypeName"];


        }
    }

    return $type;
}

function getTypeIDs(){
    $sql = "SELECT * FROM type";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $type[] = $ar["TypeID"];


        }
    }

    return $type;
}

function getEffectNames(){
    $sql = "SELECT EffectName FROM effect";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $effect[] = $ar["EffectName"];

        }
    }

    return $effect;
}

function getEffectIDs(){
    $sql = "SELECT EffectID FROM effect";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $effect[] = $ar["EffectID"];

        }
    }

    return $effect;
}

function getRarityNames(){
    $sql = "SELECT * FROM rarity";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $rarity[] = $ar["RarityName"];

        }
    }

    return $rarity;
}

function getRarityIDs(){
    $sql = "SELECT * FROM rarity";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $rarity[] = $ar["RarityID"];

        }
    }

    return $rarity;
}














/**********************************************************************************************************************
 **********************************************************************************************************************
 * Write Stuff into the DB
 **********************************************************************************************************************
 **********************************************************************************************************************/





/**********************************************************************************************************************
 * Start a new Turn
 **********************************************************************************************************************/
function nextTurn($turn, $id, $user){
    drawCard($id, 0, $user); //TODO Decks
    $sql = "UPDATE field SET turn='$turn' WHERE FieldID = '$id'";
    mysql_query($sql);
}

/**********************************************************************************************************************
 * Draw a card
 **********************************************************************************************************************/
function drawCard($id, $deck, $user){
    if($deck == 0){
        $sql = "SELECT CardID, CardRarity FROM card WHERE CardID != 0";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $cardlist[] = $ar["CardID"];
                $cardrarity[] = $ar["CardRarity"];

            }
        }

    }
    else{
        //TODO Deck Support
    }

    //Algorithm to draw random cards (Rarity included)
    $carddrawn = false;
    while(!$carddrawn){
        $random = rand(0, sizeof($cardlist)-1);
        $drawncard = $cardlist[$random];
        $percentage = 100-(10*$cardrarity[$random]) / ($cardrarity[$random]+1);
        if($percentage > rand(0,100)){
            $carddrawn = true;
        }
    }


    $handnumber = getHandNumber($id, $user);

    $sql = "UPDATE field SET ".$handnumber."='$drawncard' WHERE FieldID = '$id'";
    mysql_query($sql);
}

/**********************************************************************************************************************
 * Draw starting Hand
 **********************************************************************************************************************/
function drawStartingHand($id){
    $player = getGamePlayers($id);
    $deck = getPlayerDecks($id);

    for($i = 0; $i < 5; $i++){
        drawCard($id, $deck[0], $player[0]);
        drawCard($id, $deck[1], $player[1]);
    }
}

/**********************************************************************************************************************
 * Handnumber
 **********************************************************************************************************************/
function getHandNumber($id, $user){
    $color = getPlayerColor($id, $user);

    if($color == "red"){ $hand = new hand(getRedHand($id), false); }
    else{ $hand = new hand(getBlueHand($id), false); }

    $handcards = $hand->searchHand(0);

    return formatHandNumber($id, $user, $handcards);
}


function formatHandNumber($id, $user, $handcards){
    $color = getPlayerColor($id, $user);

    if($handcards < 10){
        $handcards = "0".$handcards;
    }

    if($color == "red"){
        $handcards = "R".$handcards;
    }
    else{
        $handcards = "B".$handcards;
    }

    $handcards = "FieldHand".$handcards;

    return $handcards;
}


/**********************************************************************************************************************
 * Play a card
 **********************************************************************************************************************/
function playCard($id, $position, $card, $cardowner, $endturn){
    if($position<10){ $position = "0".$position;}
    $position = "Field".$position;

    $query = "SELECT CardID FROM tempcard";
    $result = mysql_query($query);
    $newID = mysql_num_rows($result);
    $newID++;

    $cardid = $card->cardid;
    $cardname = $card->cardname;
    $cardtop = $card->top;
    $cardright = $card->right;
    $cardbottom = $card->bottom;
    $cardleft = $card->left;
    $cardtype = $card->type;
    $cardeffect = $card->effect;

    //Set card on field
    $sql = "INSERT INTO tempcard (CardID, TempCardID, TempCardOwner, CardName, CardTop, CardRight, CardBot, CardLeft, CardType, CardEffect)
    VALUES ('$cardid', '$newID', '$cardowner', '$cardname', '$cardtop', '$cardright', '$cardbottom', '$cardleft', '$cardtype', '$cardeffect')";
    mysql_query($sql);
    $sql = "UPDATE field SET ".$position."='$newID' WHERE FieldID = '$id'";
    mysql_query($sql);

    //Remove Card from hand
    removeSpecificCard($id, $cardowner, $cardid);


    //UpdatePoints
    updatePoints($id, $cardowner, 1);

}

/**********************************************************************************************************************
 * Remove card from hand
 **********************************************************************************************************************/
function removeSpecificCard($id, $cardowner, $cardid){
    $color = getPlayerColor($id, $cardowner);

    if ($color == "red") {
        $hand = new hand(getRedHand($id), false);
    } else {
        $hand = new hand(getBlueHand($id), false);
    }

    $cardnumber = $hand->searchHand($cardid);

    $handposition = formatHandNumber($id, $cardowner, $cardnumber);

    $sql = "UPDATE field SET " . $handposition . "= 0 WHERE FieldID = '$id'";
    mysql_query($sql);
}

function removeRandomCard($id, $cardowner){
    $color = getPlayerColor($id, $cardowner);

    if ($color == "red") {
        $hand = new hand(getRedHand($id), false);
    } else {
        $hand = new hand(getBlueHand($id), false);
    }

    $cardpos = 0;


    while($cardpos == 0){
        $random = rand(1, 10);
        $cardpos = $hand->hand[$random]->cardid;
    }

    $handposition = formatHandNumber($id, $cardowner, $cardpos);

    $sql = "UPDATE field SET " . $handposition . "= 0 WHERE FieldID = '$id'";
    mysql_query($sql);
}


/**********************************************************************************************************************
 * Steal a card
 **********************************************************************************************************************/
function stealFieldCard($cardid, $user){
    $sql = "UPDATE tempcard SET TempCardOwner='$user' WHERE TempCardID = '$cardid'";
    mysql_query($sql);
}

/**********************************************************************************************************************
 * Update a card
 **********************************************************************************************************************/
function updateFieldCard($cardid, $top, $right, $bottom, $left){
    $sql = "UPDATE tempcard SET CardTop='$top', CardRight='$right', CardBot='$bottom', CardLeft='$left' WHERE TempCardID = '$cardid'";
    mysql_query($sql);
}

/**********************************************************************************************************************
 * Update Points
 **********************************************************************************************************************/
function updatePoints($id, $user, $pointbonus){
    $playerpoint = getPlayerColor($id, $user);

    if($playerpoint == "red"){
        $playerpoint = "PointsR";
        $playerpoint2 = "PointsB";
        $opponent = "PlayerBlue";
    }
    else{
        $playerpoint = "PointsB";
        $playerpoint2 = "PointsR";
        $opponent = "PlayerRed";
    }


    $sql = "SELECT ".$playerpoint." FROM field WHERE FieldID = '$id'";
    $result  =  mysql_query($sql);

    if ($result) {

        while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

            $points = $ar[$playerpoint];


        }
    }

    $points = $points + $pointbonus;



    $sql = "UPDATE field SET ".$playerpoint."='$points' WHERE FieldID = '$id'";
    mysql_query($sql);


    //Win-Condition
    $field = new hand(getField($id), true);
    $fieldcards = $field->countHand();
    $status = getGameStatus($id);

    if(($points > 36 || $fieldcards == 36) && $status == 1){
        $sql = "SELECT ".$playerpoint2." FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $points2 = $ar[$playerpoint2];


            }
        }






        $sql = "SELECT ".$opponent." FROM field WHERE FieldID = '$id'";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $player= $ar[$playerpoint2];


            }
        }

        if($points == $points2){
            drawgame($id, $user, $player);
        }
        elseif($points > $points2){
            $playercolor = getPlayerColor($id, $user);
            wingame($id, $user, $player, $playercolor);
        }
        else{
            $playercolor = getPlayerColor($id, $player);
            wingame($id, $player, $user,  $playercolor);
        }

    }
}


















/**********************************************************************************************************************
 * Win the game
 **********************************************************************************************************************/
function wingame($id, $user, $user2, $playercolor){
    if($playercolor == "red"){
        $status = 2;
    }
    else{
        $status = 3;
    }

    $sql = "UPDATE field SET Status='$status' WHERE FieldID = '$id'";
    mysql_query($sql);

    $userdata = getUserInfo();

    $gold = $userdata[5]+= 25;
    $diamond = $userdata[6]+=1;
    $wins = $userdata[7]+=1;

    $sql = "UPDATE user SET UserGold='$gold', UserDiamond='$diamond', UserWins='$wins' WHERE UserID = '$user'";
    mysql_query($sql);

    $userdata = getUserInfoForUser(parseUserID($user2));

    $gold = $userdata[5]+= 5;
    $diamond = $userdata[6]+=1;

    $sql = "UPDATE user SET UserGold='$gold', UserDiamond='$diamond' WHERE UserID = '$user2'";
    mysql_query($sql);
}

function drawgame($id, $user, $user2){
    $status = 4;
    $sql = "UPDATE field SET Status='$status' WHERE FieldID = '$id'";
    mysql_query($sql);

    $userdata = getUserInfo();
    $gold = $userdata[5]+= 10;
    $diamond = $userdata[6]+=1;

    $sql = "UPDATE user SET UserGold='$gold', UserDiamond='$diamond', WHERE UserID = '$user'";
    mysql_query($sql);
    $sql = "UPDATE user SET UserGold='$gold', UserDiamond='$diamond', WHERE UserID = '$user2'";
    mysql_query($sql);
}


































/**********************************************************************************************************************
 * Join game
 **********************************************************************************************************************/
function joinGame($id, $user, $deck){
    $players = getGamePlayers($id);
    if($players[0] == 0){
        $sql = "UPDATE field SET PlayerBlue = '$user', DeckBlue = '$deck', Turn = '1', Status = '1' WHERE FieldID = '$id'";
    }
    else{
        $sql = "UPDATE field SET PlayerRed = '$user', DeckRed = '$deck', Turn = '1', Status = '1' WHERE FieldID = '$id'";
    }
    mysql_query($sql);
    drawStartingHand($id);
}

/**********************************************************************************************************************
 * Create game
 **********************************************************************************************************************/
function createGame($user, $name, $side, $deck){
    if($side == "blue"){
        $sql = "INSERT INTO `field` (`FieldID`, `FieldName`, `Turn`, `PlayerBlue`, `DeckBlue`, `Status`) VALUES (NULL, '$name', '0', '$user', '$deck', '0')";
    }
    else{
        $sql = "INSERT INTO `field` (`FieldID`, `FieldName`, `Turn`, `PlayerRed`, `DeckRed`, `Status`) VALUES (NULL, '$name', '0', '$user', '$deck', '0')";
    }
    mysql_query($sql);
}
?>
