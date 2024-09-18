<?php


//Sorting

//sort() => Array ascending order
$programmings = ["PHP","JAVA","JAVASCRIPT","C","C++"];

echo "<h1>Sort</h1>";
sort($programmings);
foreach($programmings as $programming){
    echo "<h3>$programming</h3>";
}

//rsort() => Array descending order
$programmings = ["PHP","JAVA","JAVASCRIPT","C","C++"];

echo "<h1>RSort</h1>";
rsort($programmings);
foreach($programmings as $programming){
    echo "<h3>$programming</h3>";
}


$foods = [
    "breakfast" => "Mohingar",
    "lunch" => "Shan and Rice",
    "dinner" => "Mala Xianguo",
];
//ksort() =>descending order according to key
echo "<h1>KSort</h1>";
ksort($foods);
foreach($foods as $key => $food){
    echo "<h3>Key is <i>$key</i> and value is <i>$food</i>.</h3>";
}

//krsort() =>descending order according to key
echo "<h1>KRSort</h1>";
krsort($foods);
foreach($foods as $key => $food){
    echo "<h3>Key is <i>$key</i> and value is <i>$food</i>.</h3>";
}



//asort() =>descending order according to value
echo "<h1>ASort</h1>";
asort($foods);
foreach($foods as $key => $food){
    echo "<h3>Key is <i>$key</i> and value is <i>$food</i>.</h3>";
}

//arsort() =>descending order according to key
echo "<h1>KRSort</h1>";
arsort($foods);
foreach($foods as $key => $food){
    echo "<h3>Key is <i>$key</i> and value is <i>$food</i>.</h3>";
}



$colors = ["Green","Red","Blue","Yellow"];
print_r($colors);
echo "<br>";

array_pop($colors);
print_r($colors);
echo "<br>";

unset($colors[2]);
print_r($colors);
echo "<br>";


//Array to String
$actors = ["Daung","Pyay Thi Oo","Eaindra Kyaw Zin","Thet Mon Myint","Paing Phyo Thu"];
print_r($actors);
echo "<br>";
echo gettype($actors);

$actors_string = implode("/",$actors);
echo "<h3>$actors_string</h3>";
echo gettype($actors_string);
echo "<br>";

//String To array
$actors_array = explode("/",$actors_string);
print_r($actors_array);
?>