<?php

namespace spec;

use Player;
use TennisGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisGameSpec extends ObjectBehavior
{

    protected $player1;
    protected $player2;

    function let(){
        $this->player1 = new Player(0, "Maria");
        $this->player2 = new Player(0,"Pepe");

        $this->beConstructedWith($this->player1,$this->player2);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(TennisGame::class);
    }

    function it_score_0_0(){
        $this->score()->shouldReturn("0 iguals");
    }

    function it_score_15_0(){
        $this->player1->winpoint();
        $this->score()->shouldReturn("15 - 0");
    }

    function it_score_15_15(){
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("15 iguals");
    }

    function it_score_15_30(){
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("15 - 30");
    }

    function it_score_15_40(){
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("15 - 40");
    }

    function it_score_30_15(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("30 - 15");
    }
    function it_score_30_30(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("30 iguals");
    }

    function it_score_30_40(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("30 - 40");
    }

    function it_score_40_15(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("40 - 15");
    }

    function it_score_40_30(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("40 - 30");
    }
    function it_score_40_40(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("40 iguals");
    }

    function it_score_avantatge_player1(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("Avantatge Maria");
    }

    function it_score_avantatge_player2(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->score()->shouldReturn("Avantatge Pepe");
    }
}
