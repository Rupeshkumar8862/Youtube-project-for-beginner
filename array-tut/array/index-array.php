<!-- 1.Indexed arrays - Arrays with a numeric index.
2.Associative arrays - 
3.Multidimensional arrays - 
4.Multidimensional Associative  arrays -  -->



<?php 
echo '<p style="text-decoration:underline "> Complete Array series:-</p>';

  // Example 1: Indexed array of fruits
  $fruits = array("Apple", "Banana", "Cherry", "Date");
  $fruits = ["Apple", "Banana", "Cherry", "Date",true,34,90.4];
// echo '<pre>';
// print_r($fruits);
// echo '</pre>';
//change value 
 $fruits[0]='ABAC';

// access way
echo $fruits[0].'<br>';
echo $fruits[1].'<br>';
echo $fruits[2].'<br>';
echo $fruits[3].'<br>';
echo $fruits[4].'<br>';
echo $fruits[5].'<br>';
echo $fruits[6].'<br>';

echo '<p>  loop  </p>';
for($i =0; $i<=6; $i++){
    // echo $i.'<br>';
    echo $fruits[$i].'<br>';
}
echo '<p> while  loop  </p>';
$a=0;
while($a<=6){
    echo $fruits[$a]."<br>";
    $a++;
}

echo '<p> foreach  loop  </p>';
foreach($fruits as $value){
    echo $value."<br>";
}







//   Example 2:
  echo '<p> for loop </p>';
  $cars = array("Toyota", "Honda", "Ford", "Chevrolet");
for($a=0; $a<=3; $a++){
    echo $cars[$a].'<br>';
}
echo '<br>';
echo '<p> foreach  loop  </p>';
foreach($cars as $car){
    echo $car."<br>";
}
  
  


  // Example 3: Indexed array of colors
  $colors = array("Red", "Green", "Blue", "Yellow","skyblue","grey","skygreen");

  for($c=0; $c<=6; $c++){
    echo $colors[$c]."<br>";
  }
  
  // Example 4: Indexed array of countries
  $countries = array("USA", "Canada", "UK", "Australia");
  for($d=0; $d<=3; $d++){
    echo $countries[$d]."<br>";
  }


?>

