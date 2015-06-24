<?php

    class card {
        var $width = 100;
        var $height = 150;
        var $cardid;
        var $cardname;
        var $top;
        var $left;
        var $bottom;
        var $right;
        var $type;
        var $effect;
        var $tempID;
        var $tempOwner;
        var $tempPosition;

/**********************************************************************************************************************
* Create a card object from a card ID
**********************************************************************************************************************/
        function __construct($cardid, $temp){
            if(!$temp){
                $card = getCardInformation($cardid);
                $this->cardid = $cardid;
                $this->description = $card[7];
                $this->rarity = $card[8];
            }
            else{
                $card = getTempCardInformation($cardid);
                $this->tempID = $cardid;
                $this->cardid = $card[7];
                $this->tempOwner = $card[8];
            }

            $this->cardname = $card[0];
            $this->top = $card[1];
            $this->right = $card[2];
            $this->bottom = $card[3];
            $this->left = $card[4];
            $this->type = $card[5];
            $this->effect = $card[6];

        }


/**********************************************************************************************************************
* Display Card
**********************************************************************************************************************/
        function displaycard(){
            $this->displaycardmargin(100, false);
        }

        function displayyourcard($id){
            $this->boardid = $id;
            $this->displaycardmargin(100, true);
        }

        function displaycardmargin($margin, $owncard){
            if($this->cardid != 0){
                if($owncard){
                echo '<a href="game.php?id='.$this->boardid.'&card='.$this->cardid.'" class="card">';
                echo'<span class="cardtext" style="position: absolute; margin-top: -'.$margin.'px;">';
                echo $this->getCardInfo();
                echo '</span>';
                echo '<img width="'.$this->width.'px" height="'.$this->height.'px" style="margin-top: -'.$margin.'px" src="card/'.$this->cardid.'.png"></img>';
                echo '</a>';
            }
            else{

                echo '<img width="'.$this->width.'px" height="'.$this->height.'px" style="margin-top: -'.$margin.'px" src="card/cardback.png"></img>';

            }
            }
        }

        function displayfieldcard($id, $card, $position, $x, $y){
            if($this->cardid == 0){
                echo '<a href="game.php?id='.$id.'&card='.$card.'&position='.$position.'">';
            }
            else{
                echo '<a href="#" class="card">';
            }
            $grey = "";
            if($this->tempOwner != getUserID()){
                $grey= 'class="grey"';
            }
            echo'<span class="cardtext" style="position: absolute; margin-top: '.$y.'px; margin-left: '.$x.'px">';
            echo $this->getCardInfo();
            echo '</span>';
            echo '<img '.$grey.' width="'.$this->width.'px" height="'.$this->height.'px" style="position: absolute; margin-top: '.$y.'px; margin-left: '.$x.'px" src="card/'.$this->cardid.'.png"></img>';
            echo '</a>';
        }


/**********************************************************************************************************************
* Get information from a card
**********************************************************************************************************************/
        function getCardInfo(){
            $cardinfo = "";
            if($this->cardid != 0){
                $cardinfo .= "<b>".$this->cardname."</b>";
                $cardinfo .= "<br /><br />";
                $cardinfo .= "<b>&nbsp;&nbsp;".$this->top."&nbsp;&nbsp;<br />";
                $cardinfo .= $this->left."&nbsp;&nbsp;".$this->right."<br />";
                $cardinfo .= "&nbsp;&nbsp;".$this->bottom."&nbsp;&nbsp;<br /></b>";
                $cardinfo .= "<br />";
                if($this->type != 0){
                    $cardinfo .= "<b>".$this->type."</b>";
                }
                if($this->effect != 0){
                    $cardinfo .= "<b>".parseEffect($this->effect)."</b>";
                }
                if(isset($this->description)){
                    $cardinfo .= "<br /><br />";
                    $cardinfo .= $this->description;
                }
            }


            return $cardinfo;
        }








/**********************************************************************************************************************
* Display card in textform (debug)
**********************************************************************************************************************/
        function displaycardAsTxt(){

            if($this->cardid != 0){
                echo "[ID] ";
                echo $this->cardid;
                echo " - [Name] ";
                echo $this->cardname;
                echo " - [Top] ";
                echo $this->top;
                echo " - [Right] ";
                echo $this->right;
                echo " - [Bottom] ";
                echo $this->bottom;
                echo " - [Left] ";
                echo $this->left;
                echo " - [Type] ";
                echo $this->type;
                echo " - [Effect] ";
                echo $this->effect;
            }

        }

    }

?>