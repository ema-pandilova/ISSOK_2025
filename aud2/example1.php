<?php
$products = [
    ["name" => "Keyboard",  "price" => 30, "inStock" => true],
    ["name" => "Mouse",     "price" => 15, "inStock" => false],
    ["name" => "Monitor",   "price" => 120,"inStock" => true],
    ["name" => "USB Cable", "price" => 8,  "inStock" => false],
];


function getAvailableNames($products) {
    $available = array_filter($products, fn($p) => $p["inStock"]);
    return array_column($available, "name");
}

$names = getAvailableNames($products);
echo "Available items: " . implode(", ", $names);
?>
