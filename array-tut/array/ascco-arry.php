<?php



// 2.Associative arrays - Arrays with named keys.
echo '<p style="text-decoration:underline "> Complete Array series:-</p>';
// example
 $car=array("brand"=>"ford","mode"=>"Mustang","year"=>1965);
//   echo '<pre>';print_r($car);echo '</pre>';

// change value
// $car['mode']= "figo";
// access way spec
// echo $car['brand'].'<br>';
// echo $car['mode'].'<br>';
// echo $car['year'].'<br>';
// loop
echo '<ul>';
foreach($car as $key=>$value){
    echo  "<li>" .$key ." " .$value.'</li>';
}
echo '</ul>';

 $empl= ["name"=>"rakesh","age"=>98,"city"=>"delhi","designation"=>"developer"];

 foreach($empl as $key=>$value){
    echo $key ." = " . $value."<br>";
 }


//example 1
  $a= [
    "sales"=>1000,
    "profit"=>500,
    "loss"=>400,
    "summary"=>"good",
 ];
 echo "<br>";
 foreach($a as $key=>$value){
    echo  $value."<br>";
 }

// / Example 2: Product details
$product = array(
    "id" => 101,
    "name" => "Laptop",
    "brand" => "Dell",
    "price" => 800
);
foreach($product as $key=>$value){
    echo $key." =>".$value."<br>";
}

// Example 3: Book details
$book = array(
    "title" => "1984",
    "author" => "George Orwell",
    "year" => 1949,
    "genre" => "Dystopian"
);

foreach($book as $key=>$val){
    echo $key."===>".$value."<br>";
}

// Example 4: Student grades
$studentGrades = array(
    "Alice" => "A",
    "Bob" => "B",
    "Charlie" => "C"
);
// Example 5: City population
$cityPopulation = array(
    "New York" => 8419000,
    "Los Angeles" => 3980000,
    "Chicago" => 2716000,
    "Houston" => 2328000
);


?>