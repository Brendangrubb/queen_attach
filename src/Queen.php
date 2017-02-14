<?php
    class Queen
    {
        private $queen_position;
        private $oponent_position;


        function canAttack($queen_position, $opponent_position)
        {
            if ($queen_position[0] == $opponent_position[0] || $queen_position[1] == $opponent_position[1])
            {
                return true;
            } elseif ($opponent_position[0]-$queen_position[0]==$queen_position[1]-$opponent_position[1]) {
                return true;
            }
        }
    }







?>
