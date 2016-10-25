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

        if ($this->player1->score() == $this->player2->score()){
            return $this->player1->score() ." iguals";
        }
        return $this->player1->score()." - ".$this->player2->score();
    }
}
