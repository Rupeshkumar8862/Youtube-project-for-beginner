<!-- 1.Indexed arrays - Arrays with a numeric index.
2.Associative arrays - 
3.Multidimensional arrays - 
4.Multidimensional Associative  arrays -  -->



<?php 
echo '<h1 style="text-decoration:underline "> Complete Array series:-</h1>';
echo '<p > Multidimensional arrays:-</p>';
// 3.Multidimensional arrays - Arrays containing one or more arrays

/*    
 0          1              2                 3
 1        Mukesh        Developer         140000  
 2        Rohit         Salesman          240000  
 3        Karan         Opertator         440000  
 4        RAina         Driver            480000  

 */
$emp =array(
array(1,"Mukesh","Developr","14000"),
array(2,"Rohit","salesman","24000"),
array(3,"aalok","Desinger","28000"),
array(4,"anika","Banker","54000"),
 );


//  for($row=0; $row<=3; $row++){
//     // echo $row.'<br>';
//     for($col=0; $col<=3; $col++){
//         echo $emp[$row][$col]."<br>";
//     }
//  }

// foreach($emp as $key=>$row){
//     foreach($row as $key=> $col){
//         echo $col."<br>";
//     }
// }

echo '<table border="1" width="200px">';
foreach($emp as $key=>$row){
    echo '<tr>';
    foreach($row as $key=> $col){
        echo "<td>". $col."</td>";
       
    }
   
    echo '</tr>';
}
echo '</table>';




echo '<pre>';
print_r($emp);
echo '</pre>';
//  echo '1st Row ::-';
// echo $emp[0][0].'<br>';
// echo $emp[0][1].'<br>';
// echo $emp[0][2].'<br>';
// echo $emp[0][3].'<br>';


// echo '1st Row 2 ::-';
// echo $emp[1][0].'<br>';
// echo $emp[1][1]."<br>";
// echo $emp[1][2].'<br>';
// echo $emp[1][3].'<br>';

// echo '1st Row 3 ::-';
// echo $emp[2][0].'<br>';
// echo $emp[2][1]."<br>";
// echo $emp[2][2].'<br>';
// echo $emp[2][3].'<br>';




// Example 1::
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

// echo '<pre>';
// print_r($cars);
// echo '</pre>';

// for($row=0; $row<3; $row++){
//     for($col=0; $col<=2; $col++){
//         echo $cars[$row][$col]."<br>";
//     }
// echo '<br>';
// }



echo '<table border="3px" >';
foreach($cars as $row){
    echo '<tr>';
    foreach($row as $row2){
        echo "<td>".$row2."</td> ";
    }
    echo '</tr>';
}
echo '<table>';
