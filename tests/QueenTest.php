<?php

    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {

        function test_canAttackX()
        {
            //Arrange
            $test_Queen = new Queen;
            $input1 = [4,3];
            $input2 = [4,8];


            //Act
            $result = $test_Queen->canAttack($input1, $input2);

            //Assert
            $this->assertEquals(true, $result);
        }

        function test_canAttackY()
        {
            //Arrange
            $test_Queen = new Queen;
            $input1 = [1,7];
            $input2 = [6,7];


            //Act
            $result = $test_Queen->canAttack($input1, $input2);

            //Assert
            $this->assertEquals(true, $result);
        }
        function test_canAttackDiagonal()
        {
            //Arrange
            $test_Queen = new Queen;
            $input1 = [2,7];
            $input2 = [6,3];


            //Act
            $result = $test_Queen->canAttack($input1, $input2);

            //Assert
            $this->assertEquals(true, $result);
        }

    }
?>
