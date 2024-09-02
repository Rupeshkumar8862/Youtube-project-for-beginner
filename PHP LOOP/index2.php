<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image print </title>
</head>
<body bgcolor="green" >
    <center>
        <h1 style="color: #fff;">PHP FOR LOOP</h1>
    </center>

   <?php 
    for($i=1; $i<=6; $i++){
        //  echo "<img src='Gallery/$i.jpg' height='' >";
        echo "<a href='Gallery/$i.jpg' target='_blank'> " ;
        echo " <img src='Gallery/$i.jpg'width='31%' border='10px' height='200px' </a>";
    }
     

    
   ?>
</body>
</html>