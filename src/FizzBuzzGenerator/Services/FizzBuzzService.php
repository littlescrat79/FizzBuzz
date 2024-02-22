<?php
declare(strict_types = 1);

namespace FizzBuzzGenerator\Services;

use FizzBuzzGenerator\Enums\FizzBuzzNumberEnums;
use FizzBuzzGenerator\Enums\FizzBuzzWordEnums;
use FizzBuzzGenerator\Exceptions\FizzBuzzNegativeNumberException;

class FizzBuzzService
{
    public function calculateResult(int $number): string
    {
        if (0 >= $number) {
            throw new FizzBuzzNegativeNumberException($number);
        }

        if (0 === $number % FizzBuzzNumberEnums::FizzBuzz->value) {
            return FizzBuzzWordEnums::FizzBuzz->value;
        }

        if (0 === $number % FizzBuzzNumberEnums::Buzz->value) {
            return FizzBuzzWordEnums::Buzz->value;
        }

        if (0 === $number % FizzBuzzNumberEnums::Fizz->value) {
            return FizzBuzzWordEnums::Fizz->value;
        }

        return (string) $number;
    }
}
