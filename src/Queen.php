<?php
    class Queen
    {
        private $queen_x;
        private $queen_y;
        private $opponent_x;
        private $opponent_y;

        // function __construct($queen_x, $queen_y, $opponent_x, $opponent_y)
        // {
        //     $this->queen_x = $queen_x;
        //     $this->queen_y = $queen_y;
        //     $this->queen_x = $opponent_x;
        //     $this->queen_y = $opponent_y;
        // }
        //
        // function getQueenX(){
        //     return $queen_x;
        // }
        //
        // function getQueenY(){
        //     return $queen_y;
        // }
        //
        // function getOpponentX(){
        //     return $opponent_x;
        // }
        //
        // function getOpponentY(){
        //     return $opponent_y;
        // }

        function canAttackX($queen_x, $opponent_x)
        {
            if ($queen_x == $opponent_x)
            {
                return true;
            }
        }

        function canAttackY($queen_y, $opponent_y)
        {
            if ($queen_y == $opponent_y)
            {
                return true;
            }
        }

        function canAttackDiagonally($queen_x, $queen_y, $opponent_x, $opponent_y, $diagonal_difference)
        {
            if ($queen_x + $diagonal_difference == $opponent_y && $queen_y  + $diagonal_difference == $opponent_x) {
                return true;
            }
        }
    }







?>
