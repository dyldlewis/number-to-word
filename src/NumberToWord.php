<?php
    class NumberToWord
    {
        private $single_digit;
        private $double_digit;

        private $numbers_to_twenty = array("" => 0, "one" => 1, "two" => 2, "three" => 3, "four" => 4, "five" => 5, "six" => 6, "seven" => 7, "eight" => 8, "nine" => 9, "ten" => 10, "eleven" => 11, "twelve" => 12, "thirteen" => 13, "fourteen" => 14, "fifteen" => 15, "sixteen" => 16, "seventeen" => 17, "eighteen" => 18, "nineteen" => 19, "twenty" => 20);

        private $numbers_twenty_to_hundred = array("twenty" => 2, "thirty" => 3, "forty" => 4, "fifty" => 5, "sixty" => 6, "seventy" => 7, "eighty" => 8, "ninety" => 9);

        function countToTwenty($input)
        {
            if ($input < 21) {
              foreach($this->numbers_to_twenty as $number => $number_value) {
                if ($input == $number_value) {
                  return $number;
                }
              }
            } elseif ($input < 100) {
              $input = strval($input);
              $input = str_split($input);
              $tens_place = $input[0];
              $ones_place = $input[1];

              foreach($this->numbers_to_twenty as $number => $number_value) {
                if ($number_value == $ones_place) {
                    $this->single_digit = $number;
                }
              }

              foreach($this->numbers_twenty_to_hundred as $number => $number_value) {
                if ($number_value == $tens_place) {
                  $this->double_digit = $number;
                }
              }
            }

            if ($ones_place == "0") {
              $doubles = $this->double_digit . $this->single_digit;
            } else {

              $doubles = $this->double_digit . "-" . $this->single_digit;
            }
            return $doubles;
        }

    }
 ?>
