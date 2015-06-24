<?php

    class attack {
        var $id; //Field ID
        var $position; //Position of attacking card
        var $cardid; //The attacking card (ID)
        var $card; //The attacking card
        var $user; //The attacking user
        var $field; //Current field (hand object)
        var $hand; //Current hand of attacking user

/**********************************************************************************************************************
* Declare new attack
**********************************************************************************************************************/
        function __construct($id, $position, $cardid, $user, $field, $hand){
            $this->id = $id;
            $this->position = $position;
            $this->cardid = $cardid;
            $this->user = $user;
            $this->field = $field;
            $this->hand = $hand;

            $this->card = new card($this->cardid, false);
        }


/**********************************************************************************************************************
* Start attack
**********************************************************************************************************************/
        function attack(){
            $endturn = true;


            if($this->hand->searchHand($this->cardid)){ //Cheating prevention
                $positionavailable = getCardFromPosition($this->id, $this->position);
                if($positionavailable == 0){ //Cheating prevention
                    if($this->card->effect != 0){
                        $endturn = $this->executeeffect($this->card->effect);
                    }

                    $this->calculateattack();
                    playCard($this->id, $this->position, $this->card, $this->user, true); //Database call

                    if(!$endturn){
                        echo '<meta http-equiv="refresh" content="0;URL=\'game.php?id='.$this->id.'\'" />';
                    }
                }
                else{
                    $endturn = false;
                }
            }
            else{
                $endturn = false;
            }


            return $endturn;
        }


/**********************************************************************************************************************
* Execute effect
**********************************************************************************************************************/
        function executeeffect($effectid) {
            $effect = new effect($effectid);
            $effect->id = $this->id;
            $effect->user = $this->user;
            $effect->deck = 0; //ToDo Deck
            $effect->position = $this->position;
            $effect->field = $this->field;

            return $effect->execute();
        }





/**********************************************************************************************************************
* Calculate attack
**********************************************************************************************************************/
        function calculateattack() {
            $pointbonus = 0;
            $adjacent = $this->getAdjecentCards();

            if($adjacent[0]->cardid != 0){
                if($this->card->top > $adjacent[0]->bottom && $this->user != $adjacent[0]->tempOwner){
                    stealFieldCard($adjacent[0]->tempID, $this->user);
                    $pointbonus++;
                }
            }
            if($adjacent[1]->cardid != 0){
                if($this->card->right > $adjacent[1]->left && $this->user != $adjacent[1]->tempOwner){
                    stealFieldCard($adjacent[1]->tempID, $this->user);
                    $pointbonus++;
                }
            }
            if($adjacent[2]->cardid != 0){
                if($this->card->bottom > $adjacent[2]->top && $this->user != $adjacent[2]->tempOwner){
                    stealFieldCard($adjacent[2]->tempID, $this->user);
                    $pointbonus++;
                }
            }
            if($adjacent[3]->cardid != 0){
                if($this->card->left > $adjacent[3]->right && $this->user != $adjacent[3]->tempOwner){
                    stealFieldCard($adjacent[3]->tempID, $this->user);
                    $pointbonus++;
                }
            }

            updatePoints($this->id, $this->user, $pointbonus); //Database Call
        }





/**********************************************************************************************************************
* Get adjecent cards
**********************************************************************************************************************/
        function getAdjecentCards() {
            $id = $this->id;
            $adjacent = array();

            //Top Card
            $temppos = $this->position - 6;
            if($temppos > 0){
                $cardid = getCardFromPosition($id, $temppos); //Database Call
                $adjacent[0] = new card($cardid, true);
                $adjacent[0]->tempPosition = $temppos;
            }
            else{
                $adjacent[0] = $this->getBlankCard();
            }


            //Right Card
            $temppos = $this->position + 1;
            if($temppos-7 == 0 || ($temppos-7)%10 == 0){
                $adjacent[1] = $this->getBlankCard();
            }
            else{
                $cardid = getCardFromPosition($id, $temppos); //Database Call
                $adjacent[1] = new card($cardid, true);
                $adjacent[1]->tempPosition = $temppos;
            }


            //Bottom Card
            $temppos = $this->position + 6;
            if($temppos <= 36){
                $cardid = getCardFromPosition($id, $temppos); //Database Call
                $adjacent[2] = new card($cardid, true);
                $adjacent[2]->tempPosition = $temppos;
            }
            else{
                $adjacent[2] = $this->getBlankCard();
            }


            //Left Card
            $temppos = $this->position - 1;
            if($temppos == 0 || $temppos%6 == 0){
                $adjacent[3] = $this->getBlankCard();
            }
            else{
                $cardid = getCardFromPosition($id, $temppos); //Database Call
                $adjacent[3] = new card($cardid, true);
                $adjacent[3]->tempPosition = $temppos;
            }



            return $adjacent;
        }



        function getBlankCard(){
            $card = new card(0, false);
            return $card;
        }



    }






?>