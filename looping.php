<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    

    <style>
      th tr{
    text-align:center;
  }
    </style>


<body>
 <div class="container-fluid">
  <form method="POST" action="#">

   <div class="form-group">
    <label>ENTER YOUR NUMBER</label>
      <input type="number" class="form-control" name="num">
    </div>

    <div class="form-group">
      <input type="submit"  class="btn btn-primary mb-2" value="ENTER">
    </div>
  </form>
 </div> 
  
 <table class="table table-bordered">
  <thead>
      <th>MULTIPLICATION TABLE</th>
  </thead>
  
  <?php 
  if(ISSET($_POST['num'])){
      $num = $_POST['num'];
      for ($i=1; $i <= 10; $i++) {
          echo "<tr> \n";
          $result = $num * $i;
          echo "<td>" ."   ".$num . "  *  " . $i. "  =  ".$result. "</td>";
          echo "</tr>";
      }
  }
?>
</table>
</body>
</html>