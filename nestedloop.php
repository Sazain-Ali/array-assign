<?php 
  
 $a = "* ";
 for ($i = 1 ; $i<=5; $i ++){
     for ( $j = 1; $j<=$i; $j ++){
        echo  $a;
     }
     
  echo "<br>";
 };
   echo "<br><br>";
    for($i=0;$i<=5;$i++){  
       for($j=5-$i;$j>=1;$j--){  
          echo $a;  
        }  
    echo "<br>";  
   }  

   
echo "<br><br>";
  for($d=1; $d<=5; $d++){
     for($r=5-1; $r>=$d; $r --){
       echo "&nbsp"."&nbsp"."&nbsp";
     }
     for($t=1; $t<=$d; $t ++){
       echo $a;
     }
     echo "<br>";
  }

  echo "<br><br>";
  for($d=1; $d<=5; $d++){
     for($r=5-1; $r>=$d; $r --){
       echo "&nbsp","&nbsp";
     }
     for($t=1; $t<=$d; $t ++){
       echo $a;
     }
     echo "<br>";
  }

  /*echo "<br><br>";
  for($d=0; $d<=5; $d++){
     for($r=5-1; $r<=$d; $r --){
       echo "&nbsp";
     }
     for($t=0; $t>=$d; $t --){
       echo $a;
     }
     echo "<br>";
  }*/
?>