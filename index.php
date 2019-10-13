<?php

use function Nfq\Akademija\NotTyped\calculateHomeWorkSum;
use function Nfq\Akademija\Soft\calculateHomeWorkSum as calculateSoftHomeWorkSum;
use function Nfq\Akademija\Strict\calculateHomeWorkSum as calculateStrictHomeWorkSum;

require("vendor/autoload.php");

try {

    $colors = new Wujunze\Colors();

    $sum = \calculateHomeWorkSum(3, 2.2, '1');
    echo $colors->getColoredString("calculateHomeWorkSum: $sum \n", "green");

    $sum = calculateHomeWorkSum(3, 2.2, '1');
    echo $colors->getColoredString("Nfq\Akademija\NotTyped\calculateHomeWorkSum: $sum \n", "red");

    $sum = calculateSoftHomeWorkSum(3, 2.2, '1');
    echo $colors->getColoredString("Nfq\Akademija\Soft\calculateHomeWorkSum: $sum \n", "blue");

    $sum = calculateStrictHomeWorkSum(3, 2.2, '1');
    echo $colors->getColoredString("Nfq\Akademija\Strict\calculateHomeWorkSum: $sum \n", "yellow");
} catch (\Throwable $exp) {
    echo "Įvyko klaida";
}