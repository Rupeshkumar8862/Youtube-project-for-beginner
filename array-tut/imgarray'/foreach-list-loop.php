<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimensional Array List()</title>
</head>
<body>
    
<?php 


    $Electric = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

//for loop
    for($row=0; $row<4;$row++){
        // echo $row."<br>";
        for($col=0; $col<3; $col++){
        //   echo $col."<br>";
        echo  $Electric[$row][$col]." ";
        }
    echo '<br>';
    }
    echo 'foreach loop<br>';
//foreach loop
foreach($Electric as $row){
    foreach($row as $col){
        echo $col." ";
    }
    echo '<br>';
}

//     echo '<pre>';
// print_r($Electric);
// echo '</pre>';


/* syanax
foreach($array as list($val1, $val2)){
    //statement
}
    Example1
    $array=[
    [1,2],
    [30,40],
    [50,40]
    ];

    foreach($array as list($val1, $val2)){
    echo $a.$b;
}
    */

// foreach ($Electric as list($name,$subj1,$subj2)){
//     echo "$name  $subj1 $subj2 <br>";
// }
echo '<table border="1" width="200px" cellpadding="5px">';

echo "<tr> 
  <th>name</th>
  <th>sub1 </th>
  <th>sub2 </th>

</tr>";
foreach ($Electric as list($name,$subj1,$subj2)){
    echo '<tr>';
    echo "<td> $name</td><td>  $subj1 </td><td>$subj2 </td>";
    echo '</tr>';
}
echo '</table>';

// foreach list() multdimess assoc array
$employees = array(
    "John Doe" => array(
        "age" => 30,
        "position" => "Manager",
        "salary" => 60000
    ),
    "Jane Smith" => array(
        "age" => 25,
        "position" => "Developer",
        "salary" => 50000
    ),
    "Sam Brown" => array(
        "age" => 28,
        "position" => "Designer",
        "salary" => 45000
    )
);
// write way
$employees = [
    "John Doe" => [
        "age" => 30,
        "position" => "Manager",
        "salary" => 60000
    ],
    "Jane Smith" => [
        "age" => 25,
        "position" => "Developer",
        "salary" => 50000
],
    "Sam Brown" => [
        "age" => 28,
        "position" => "Designer",
        "salary" => 45000
]
    ];
// echo "<pre>";
// print_r($employees);
// echo "</pre>";
// note add "key name"=> then variable define
// foreach($employees as list("age"=>$age,"position"=>$position,"salary"=>$salary)){
//     echo " $age $position $salary <br>";
// }
// foreach ($employees as $name => $details) {
    // Convert associative array to indexed array
    // $detailsIndexed = array_values($details);
    // Now you can use list() to destructure the indexed array
//     list($age, $position, $salary) = $detailsIndexed;
//     echo "Name: $name - Age: $age, Position: $position, Salary: $salary<br>";
// }


// foreach diif
// foreach ($employees as $name => $details) {
//     echo "Name: " . $name . "<br>";
//     echo "Age: " . $details['age'] . "<br>";
//     echo "Position: " . $details['position'] . "<br>";
//     echo "Salary: $" . $details['salary'] . "<br><br>";
// }


//example

$emp =[
  ["id"=>1,
  "name"=>"Jon",
  "age"=>70,
  "designation"=>"Manager",
  "salary"=>3300
],

  ["id"=>2,
  "name"=>"syam",
  "age"=>40,
  "designation"=>"Developer",
  "salary"=>5000
],

  ["id"=>3,
  "name"=>"ram",
  "age"=>65,
  "designation"=>"Software Engineer",
  "salary"=>5600
],
  ["id"=>4,
  "name"=>"karm",
  "age"=>90,
  "designation"=>"Engineer",
  "salary"=>4400
],
];
// echo "<pre>";
// print_r($emp);
// echo "</pre>";

// foreach($emp as list("id"=>$id,"name"=>$name,"age"=>$age,"designation"=>$designation,"salary"=>$salary)){
//     echo "$id $name $age $designation $salary <br>";
// }
?>
</body>
</html>