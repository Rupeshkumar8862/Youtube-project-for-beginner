<?php 
/*
name       physics       Computer          math   Cemistry
arjun      85              87              78       54
visah      55              57             45       54
deepak     36              87              58       64
*/








$mark= array(
 "arjun"=>array("pysics"=>85,"computer"=>27,"math"=>78,"cemistry"=>54),
 "amit"=>array("pysics1"=>55,"compute1r"=>85,"math1"=>58,"cemistry1"=>24),
 "sajan"=>array("pysics2"=>95,"computer2"=>57,"math2"=>58,"cemistry2"=>29),
 "anika"=>array("pysics3"=>82,"computer3"=>97,"math3"=>28,"cemistry3"=>15),
 "mohit"=>array("pysics4"=>75,"computer4"=>57,"math4"=>58,"cemistry4"=>64),
 "rohit"=>array("pysics5"=>95,"computer5"=>67,"math5"=>88,"cemistry5"=>54),

);

// echo '<pre>';
// print_r($mark);
// echo '</pre>';
// echo 'acess particular data from array <br>';
// echo $mark['arjun']['pysics'];
// echo $mark['amit']['cemistry1'].'<br>';
echo 'foreach loop <br>';
foreach($mark as $key=>$outerRow){
    echo $key."<br>";
    foreach($outerRow  as $nkey=> $innerRow){
        echo $nkey.$innerRow."  ";
    }
    echo '<br>';
}
echo 'foreach loop table <br>';

echo '<table border="1" wdith="300px" cellpadding="8px">';
foreach($mark as $key=>$outerRow){
    echo '<tr>';
    echo "<td>".$key."</td>";
    foreach($outerRow  as $nkey=> $innerRow){
        echo "<td>".$nkey."</td>";
        echo "<td>".$innerRow."</td>  ";
    }
    echo '</tr>';
}

echo '<table>';

