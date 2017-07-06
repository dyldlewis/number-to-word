<?php
    require_once "src/NumberToWord.php";



    class NumberToWordTest extends PHPUnit_Framework_TestCase
    {
        function testCountToTwenty()
        {
            //Arrange
            $test_NumberToWord = new NumberToWord;
            $input = 18;

            //Act
            $result = $test_NumberToWord->countToTwenty($input);

            //Assert
            $this->assertEquals("eighteen", $result);
         }

         function test_countToTwenty()
         {
           $test_NumberToWord = new NumberToWord;
           $input = 40;

           $result = $test_NumberToWord->countToTwenty($input);

           $this->assertEquals("forty", $result);
         }

    }




 ?>
