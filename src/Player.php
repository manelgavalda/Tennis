<?php

/**
 * Created by PhpStorm.
 * User: manel
 * Date: 25/10/16
 * Time: 16:40
 */
class Player
{
    protected $code = [
        0=> "0",
        1=> "15",
        2=> "30",
        3=> "40"
    ];
    protected $score;

    protected $points=0;
    protected $name;

    /**
     * Player constructor.
     * @param $score
     * @param $name
     */
    public function __construct($score, $name)
    {
        $this->score = $score;
        $this->name = $name;
    }

    public function winpoint()
    {
        $this->points+=1;
    }

    public function score(){
        return $this->code[$this->points];
    }

    public function name()
    {
        return $this->name;
    }

    public function points(){
    return $this->points;
}
}