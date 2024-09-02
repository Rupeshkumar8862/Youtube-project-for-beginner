<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couting 1  to 100 </title>
</head>
<body>
<caption>Couting 1 TO 100 </caption> 
<table  border="1" width=60%>

 <?php 
   for($i=1; $i<=10; $i++){
      echo "<tr>";
      for($j=1; $j<=10; $j++){
        echo  '<td>' .($i*$j). '</td>';
      }
      echo "</tr>";
   }
 
 ?>

</table>
</body>
</html>