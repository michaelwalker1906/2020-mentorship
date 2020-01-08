<?php

echo "Let's calculate the cost of your coffee purchase!\n";
echo "Tell me how many pounds of coffee you want to buy? ";
$weight = fgets(STDIN);

echo "\nTell me the cost per pound of this coffee? ";
$unitCost = fgets(STDIN);

$salesTax = 1.07;

$subTotal = $weight * $unitCost;

$totalCost = $subTotal * $salesTax;

echo "----\n";
echo "Sub-total:               $" . round($subTotal, 2) . "\n";
echo "Grand total (w/ tax):    $" . round($totalCost, 2) . "\n";
echo "Sales tax:               7.0%\n";
echo "----\n";
