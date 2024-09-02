<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nested php for loop </title>
</head>
<body>
    <?php
    // outer loop
    for($i=1; $i<=2; $i++){
      //echo $i;
       echo "OUTER I VALUE=$i <br>";
       //inner loop
       for($j=1; $j<=3; $j++){
         echo  "INNER J VALUE=$j <br>";
       for($k=1; $k<=4; $k++){
       echo "k value=$k <br>";
       }
       echo '<br>'; 
    }
    }
                                                         
    ?>


</body>
</html>