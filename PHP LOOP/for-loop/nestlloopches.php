<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nested for loop chesbox 8 8 </title>
</head>
<body>
     <table border="1" width="30%" cellpadding="0" height="200px">
   <?php 
   for($i=1; $i<=8; $i++){
     echo "<tr>";
     for ($j=1; $j<=8; $j++){
             $total =$i+$j;
    
     if($total %2==0){
        echo "<td bgcolor='black'> </td>";
     }else{
        echo "<td bgcolor='white'></td>";
     }



     }
     echo '</tr>';  
   }
   
   ?>

     </table>


     

</body>
</html>