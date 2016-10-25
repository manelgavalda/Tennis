<?php

class TennisGame

{
    protected $player1;

    protected $player2;



    public function __construct(Player $player1, Player $player2)
    {
        $this->player1=$player1;
        $this->player2=$player2;
    }

    public function score(){

        if($this->player1->score()>3 || $this->player1->score()>3){
            $diferencia= $this->player1->points() - $this->player2->points();
            if($diferencia>0){
                //guanya player1
                return "Avatantatge". $this->player1->name();
            }
            elseif ($diferencia==0){
                //Iguals
                return "Iguals";
            }
            elseif ($diferencia<0){
                //player 2 guanya
                return "Avatantatge". $this->player1->name();
            }
        }

        if ($this->player1->score() == $this->player2->score()){
            return $this->player1->score() ." iguals";
        }
        return $this->player1->score()." - ".$this->player2->score();
    }
}
