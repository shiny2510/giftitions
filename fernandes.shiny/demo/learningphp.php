<?php

// hello;
// phpinfo();

echo "<h1>Hello Shiny</h1>";
echo "<div>Goodbye World</div>";

$a = 5;

// String Interpolation
echo "<div> I have $a things</div>";
echo '<div> I have $a things</div>';

// VALUE TYPES

// Number
// Integer
$b = 15;
// Float
$b = 0.576;

$b = 10;


// String
$name = "Yerguy";
$name = 'Hamilton';

// Boolean
$isOn = true;

// function, class, object



// Math

// Order of Operation
// PEMDAS
echo (5 + 4) * 2;

// Concatenation
echo "<div>b + a = " . "c</div>";
echo "<div>$b + $a = " . ($b+$a) . "</div>";

?>


<hr>
<div>This is my name</div>
<div>

<?php

$firstname = 'Shiny';
$lastname = 'Fernandes';
$fullname = $firstname." ".$lastname;

echo $fullname;

?>

</div>

<hr>

<?php

// Superglobal

// ?name=Joey
echo "<div><a href='?name=Joey'>Joey</a></div>";
echo "<div><a href='?name=Frank'>Frank</a></div>";
echo "<div>May name is {$_GET['name']}</div>";


echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=button'>BUTTON</a></div>";
echo "<{$_GET['type']}>May name is {$_GET['name']}</{$_GET['type']}>";