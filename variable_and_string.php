<?php
    //let Varaiable

    $name = "Hein Min Htet";
    $address = "Mandalay";

    //Double quote & sigle qupte
    
    echo "My name is $name";
    echo '<br>';
    echo 'I live in $address<br>';
    echo 'I live in '.$address;
    echo '<br>';
    echo $name.' live in '.$address;

    //.=
    $first_name = 'Alan';
    echo "<p>$first_name</p>";
    $last_name = 'Walker';
    echo "<p>$last_name</p>";

    $first_name .= 'Walker';
    echo "<p>$first_name</p>";

    //trim() 
    $singer = ' Taylor Swift ';
    echo "<p>My favourit singer is$singer.</p>";
    echo "<p>My favourite singer is".trim($singer).".</p>"; 

    //strlen()
    echo strlen($singer);
    echo "<br>";
    $singer_length = trim($singer);
    echo "<br>";
    
    //strtolower(string)
    echo strtolower($singer);
    echo "<br>";

    //strtoupper(string)
    echo strtoupper($singer);
    echo "<br>";

    //substr()
    echo substr("Hello HeinLearner",6);
    echo "<br>";
    echo substr("Hello HeinLearner",6,4);
    echo "<br>";

    //str_replace
    $city = 'Hello Mandalay';
    echo "<p>$city</p>";
    echo str_replace('Mandalay','Smart City', $city)

?>