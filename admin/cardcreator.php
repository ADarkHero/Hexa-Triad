<?php
    include 'adminmenu.php';

    if(isset($_POST["cardname"])){
        $cardname = $_POST["cardname"];
        $cardpicture = $_POST["cardname"];
        $carddescription = $_POST["carddescription"];
        $cardtop = $_POST["cardtop"];
        $cardright = $_POST["cardright"];
        $cardbottom = $_POST["cardbottom"];
        $cardleft = $_POST["cardleft"];
        $cardtype = $_POST["cardtype"];
        $cardeffect = $_POST["cardeffect"];
        $cardrarity = $_POST["cardrarity"];

        $sql = "SELECT CardID FROM card WHERE CardID != 0";
        $result  =  mysql_query($sql);

        if ($result) {

            while ($ar=mysql_fetch_array($result,MYSQL_ASSOC)) {

                $cardlist[] = $ar["CardID"];

            }
        }

        $cardid = sizeof($cardlist)+1;


        $target_path = "../card/";

        $target_path = $target_path . $cardid . '.png';

        if(move_uploaded_file($_FILES['cardpicture']['tmp_name'], $target_path)) {
            $sql = "INSERT INTO card (CardID, CardName, CardDescription, CardTop, CardRight, CardBot, CardLeft, CardType, CardEffect, CardRarity)
            VALUES ('$cardid', '$cardname', '$carddescription', '$cardtop', '$cardright', '$cardbottom', '$cardleft', '$cardtype', '$cardeffect', '$cardrarity')";
            mysql_query($sql);

            echo 'Card successfully created!';
        }
        else{
            echo 'Failure!';
        }

        }

?>

<center>
    <form action="cardcreator.php" method="post" enctype="multipart/form-data">
        <input type="text" size="50" name="cardname" placeholder="Card name"><br /><br />
        <input type="file" name="cardpicture"><br /><br />
        <input type="text" size="50" name="carddescription" placeholder="Card description"><br /><br />
        <input type="text" size="5" name="cardtop" placeholder="Top">
        <input type="text" size="5" name="cardright" placeholder="Right">
        <input type="text" size="5" name="cardbottom" placeholder="Bottom">
        <input type="text" size="5" name="cardleft" placeholder="Left"><br /><br />
        <select name="cardtype">
            <?php
                $types = getTypeIDs();
                $typenames = getTypeNames();

                echo'<option value="'.$types[$i].'">Choose Type...</option>';

                for($i = 0; $i < sizeof($types); $i++){
                    echo'<option value="'.$types[$i].'">'.$typenames[$i].'</option>';
                }
            ?>
        </select><br /><br />
        <select name="cardeffect">
            <?php
                $effects = getEffectIDs();
                $effectnames = getEffectNames();

                echo'<option value="'.$types[$i].'">Choose Effect...</option>';

                for($i = 0; $i < sizeof($effects); $i++){
                    echo'<option value="'.$effects[$i].'">'.$effectnames[$i].'</option>';
                }
            ?>
        </select><br /><br />
        <select name="cardrarity">
            <?php
                $rarity = getRarityIDs();
                $raritynames = getRarityNames();

                echo'<option value="'.$rarity[$i].'">Choose Rarity...</option>';

                for($i = 0; $i < sizeof($rarity); $i++){
                    echo'<option value="'.$rarity[$i].'">'.$raritynames[$i].'</option>';
                }
            ?>
        </select><br /><br />


        <input type="hidden" value="0" name="deck">
        <input type="submit" value="Create new card!">
    </form>
</center>