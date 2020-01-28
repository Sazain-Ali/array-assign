<?php 
 
    if(isset($_POST['num'])){ 
	  $num = $_POST['num'];
   

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

	  function numberToWords ($number){ 
        //foreach($number as $word){
			return $word[$number];
		//}

		if($number > "20" && $number < "100"){
			return numberToWords(round( $number / 10) * 10). " ". numberToWords($number % 10);
		}
           return $number;
	  }
   
	  echo numberToWords($num);  



	}
	  
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