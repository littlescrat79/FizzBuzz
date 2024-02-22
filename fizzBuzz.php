<?php
declare(strict_types = 1);

require_once 'vendor/autoload.php';

use FizzBuzzGenerator\Services\FizzBuzzService;
use FizzBuzzGenerator\Exceptions\FizzBuzzNegativeNumberException;

$fizzBuzzService = new FizzBuzzService;

for($i = 0; $i <= 100; $i++) {
    try {
        echo "\n".$fizzBuzzService->calculateResult($i);
    }
    catch (FizzBuzzNegativeNumberException $fizzBuzzException)
    {
        echo $fizzBuzzException->getMessage();
    }
}
