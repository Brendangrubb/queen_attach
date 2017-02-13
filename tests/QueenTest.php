<?php

require_once "src/Queen.php";

class QueenTest extends PHPUnit_Framework_TestCase
{

    function test_canAttackX()
    {
        //Arrange
        $test_Queen = new Queen;
        $input1 = "d";
        $input2 = "d";


        //Act
        $result = $test_Queen->canAttackX($input1, $input2);

        //Assert
        $this->assertEquals(true, $result);
    }

    function test_canAttackY()
    {
        //Arrange
        $test_Queen = new Queen;
        $input1 = "3";
        $input2 = "3";


        //Act
        $result = $test_Queen->canAttackY($input1, $input2);

        //Assert
        $this->assertEquals(true, $result);
    }
}


 ?>
