<!DOCTYPE html>
<html>
<head>
  <title>MULTIDIMENSIONAL ARRAY</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head> 
<style>
  .tabletable-bordered{
   
  }
  th{
    text-align:center;
  }
</style> 

<body>
     <!-- LAYOUT TABLE-->
 <table class="table table-bordered">
  <thead>
      <th colspan="4">Students And Their Subject Marks</th>
  </thead>
  
  
  
<?php 
       //Multi-Dimensional array
$marks = array(
    array("name","maths","urdu","english"),
    array("Sana", 25, 56, 45),
    array("Maliha", 44, 32, 74),
    array("Faiza", 54, 65, 43)
    );

    
      //Loop to display Array
    foreach($marks as $keys => $value){
        echo "<tr> <br>";
        echo "<td>". $value[0]." </td> ";
        echo  "<td>".$value[1]." </td>  ";
        echo  "<td>".$value[2]."  </td> ";
        echo  "<td>".$value[3]." </td> <br>";
        echo "</tr>";
    }
?>

 </table>
</body>
</html>