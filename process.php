<?php
//Set error reporting to true
ini_set('display_errors',1);
error_reporting(E_ALL);
print('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">');

$flavors = $_POST['flavor'];

$total = 0;
$thanks = "<ul>";
foreach($flavors as $flavor) {
    $total += 3.5;
    $thanks .= '<li>'.$flavor.'</li><br>';
}
print('<p>Thank you '.$_POST['username'].' for your order! <br>'.
    'Order Summary:<br>'.$thanks.'</ul>Order total: $10.50</p>');