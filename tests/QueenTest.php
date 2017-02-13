<?php

require_once "src/Queen.php";

class QueenTest extends PHPUnit_Framework_TestCase
{

    function test_canAttack()
    {
        //Arrange
        $test_Queen = new Queen;
        $input1 = "d";
        $input2 = "3";
        $input3 = "d";
        $input4 = "8";

        //Act
        $result = $test_Queen->canAttack($input1, $input2, $input3, $input4);

        //Assert
        $this->assertEquals(true, $result);
    }
}


 ?>
