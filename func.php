<?php 
 $words =array( "1" => "one",
               "2" => "two",
               "3" => "three",
               "4" => "four",
               "5" => "five",
               "6" => "six",
               "7" => "seven",
               "8" => "eight",
               "9" => "nine",
               "10" => "ten",
               "11" => "eleven",
               "12" => "twelve",
               "13" => "thirteen",
               "14" => "fourteen",
               "15" => "fifteen",
               "16" => "sixteen",
               "17" => "seventeen",
               "18" => "eighteen",
               "19" => "nineteen",
               "20" => "twenty",
               "30" => "thirty",
               "40" => "forty",
               "50" => "fifty",
               "60" => "sixty",
               "70" => "seventy",
               "80" => "eighty",
               "90" => "ninety",
               "100" => "hundred",
              "1000" => "thousand");

    if(isset($_POST['num'])){ 
      $num = $_POST['num'];

       function numberToWords ($number){  

        if (is_numeric ($number)){
             $number = (int) round($number);

             if ($number < 0){
               $number = -$number;
               $number_in_words = 'minus ';
              }

             if ($number > 1000){
                $number_in_words = $number_in_words . numberToWords(floor($number/1000)) . " " . $words[1000];
                $hundreds = $number % 1000;
                $tens = $hundreds % 100;

                 if ($hundreds > 100){
                     $number_in_words = $number_in_words . ", " . numberToWords ($hundreds);
                  }
                    elseif ($tens){
                    $number_in_words = $number_in_words . " and " . numberToWords ($tens);
                    }
              }

          elseif ($number > 100){
                  $number_in_words = $number_in_words . numberToWords(floor ($number / 100)) . " " . $words[100];
                  $tens = $number % 100;

                   if ($tens){
                      $number_in_words = $number_in_words . " and " . numberToWords ($tens);
                    }
          }

          elseif ($number > "20" && $number <100){
              $number_in_words = $number_in_words . " " . $words[10 * floor ($number/10)];
              $units = $number % 10;
               
                if ($units){
                    $number_in_words = $number_in_words . numberToWords ($units);
                    }
          }
  else{
      $number_in_words = $number_in_words . " " . $words[$number];
    }
    return $number_in_words;
    }
    return false;
   }
     echo numberToWords ($number);
    };
      
      


?>









<!DOCTYPE html>
<html>
<head></head>

<body>
  <form method="POST">
   <label>ENTER YOUR NUMBER</label>
   <input type="number" name="num"><br><br>
   <input type="submit"  value="ENTER">
  </form>

</body>
</html>



