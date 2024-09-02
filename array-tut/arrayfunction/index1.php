<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// 1 .PHP ARRAY :Count() and sizeof()
//2nd parameter mode for inner array conting for multidemessinal only

$a=["Raman","Manish","Rohit","Deepak","Deepak","mainsha","gita","gita","honedo","lala"];
// echo count($a);
// echo sizeof($a);
$len= count($a);
// loop
for($i=0; $i<$len ;  $i++){
    echo $a[$i].'<br>';
}
// 2. array_count_values($array) :it is return array and also tell repeated value count
echo '<pre>';
print_r(array_count_values($a));
echo '</pre>';


//  php multidimessinal assoc array
$food= array(
   'Fruits'=>array('Orange',"banana","apple","grapes","trdss"),
   'veggie'=>array('potato',"tomato","onion","ladyfinger","cucmber")

);
//echo sizeof($food,1);// inner array count
//echo sizeof($food['Fruits'],1);// specfice value count
$len=sizeof($food);
$len2=sizeof($food,1);
echo '<pre>';
print_r($food);
echo '</pre>';
// foreach 
foreach($food as $row){
    foreach($row as $colrow){
        echo $colrow." ";
    }
    echo "<br>";
}


echo "<br>";
// foreach list

// foreach($food as list($o,$b ,$a,$g,$c)){
//     echo "$o $b $a $g $c" ." <br> ";
// }
echo '<table border="3px" cellpadding="4px" width="200px" cellspacing="5px">';
foreach($food as list($o,$b ,$a,$g,$c)){
    echo "<tr><td>$o </td><td>$b</td><td> $a</td><td> $g</td><td> $c </td></tr>"  ;
}
echo '</table>';
?>


</body>
</html>