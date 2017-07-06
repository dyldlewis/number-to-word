<?php
    require_once "src/NumberToWord.php";



    class NumberToWordTest extends PHPUnit_Framework_TestCase
    {
        function test_counterTo20()
        {
            //Arrange
            $test_NumberToWord = new NumberToWord;
            $input = 18;

            //Act
            $result = $test_NumberToWord->counter($input);

            //Assert
            $this->assertEquals("eighteen", $result);
         }

         function test_counterTo99()
         {
           $test_NumberToWord = new NumberToWord;
           $input = 40;

           $result = $test_NumberToWord->counter($input);

           $this->assertEquals("forty", $result);
         }

         function test_counterTo999()
         {
           $test_NumberToWord = new NumberToWord;
           $input = 492;

           $result = $test_NumberToWord->counter($input);

           $this->assertEquals("four hundred ninety-two", $result);
         }
    }




 ?>
