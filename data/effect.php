<?php

    class effect {

        var $effectid;

        var $id; //ID of played card
        var $deck; //DeckID of person who played card
        var $user; //Person, who played the card
        var $position; //Position of played card
        var $field; //Current field

/**********************************************************************************************************************
* Declare and execute effect
**********************************************************************************************************************/
        function __construct($effectid){
            $this->effectid = $effectid;
        }

        function execute(){
            switch ($this->effectid){
                case 1: $this->drawCard(); break;
                case 2: $this->amnesia(); break;
                case 3: $this->buffadjacent(1); break;
                case 4: return false; break;
                case 5: $this->drawCard(); return false; break;
            }
            return true;
        }




/**********************************************************************************************************************
* Draw 1
**********************************************************************************************************************/
        function drawCard(){
            drawCard($this->id, $this->deck, $this->user);
        }

/**********************************************************************************************************************
* Amnesia 1
**********************************************************************************************************************/
        function amnesia(){
            removeRandomCard($this->id, $this->user);
        }

/**********************************************************************************************************************
* Buff Adjacent 1
**********************************************************************************************************************/
        function buffadjacent($value){
            $att = new attack($this->id, $this->position, $this->id, $this->user, $this->field);
            $adjacent = $att->getAdjecentCards();

            for($i = 0; $i < 4; $i++){
                if($adjacent[$i]->cardid != 0){
                    $adjacent[$i]->top += $value;
                    $adjacent[$i]->right += $value;
                    $adjacent[$i]->bottom += $value;
                    $adjacent[$i]->left += $value;
                    updateFieldCard($adjacent[$i]->tempID, $adjacent[$i]->top, $adjacent[$i]->right, $adjacent[$i]->bottom, $adjacent[$i]->left);
                }
            }
        }
    }






?>