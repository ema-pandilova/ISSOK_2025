<?php
$products = [
    ["name" => "Keyboard",  "price" => 30],
    ["name" => "Mouse",     "price" => 15],
    ["name" => "Monitor",   "price" => 120],
    ["name" => "Headphones","price" => 45],
];

function calculateAveragePrice($products) {
    $prices = array_column($products, "price");
    $total  = array_sum($prices);
    $count  = count($prices);
    return $count > 0 ? $total / $count : 0;
}

$avg = calculateAveragePrice($products);
echo "Average price: " . number_format($avg, 2);
?>
