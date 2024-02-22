<?php
declare(strict_types = 1);

namespace FizzBuzzGenerator\Exceptions;

class FizzBuzzNegativeNumberException extends \InvalidArgumentException
{
    public function __construct(int $number, int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct(sprintf('Failure: %d should be greater than 0!', $number), $code, $previous);
    }
}
