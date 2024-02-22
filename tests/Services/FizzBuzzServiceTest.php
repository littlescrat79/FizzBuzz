<?php
declare(strict_types=1);

namespace tests\Services;

use PHPUnit\Framework\TestCase;
use FizzBuzzGenerator\Exceptions\FizzBuzzNegativeNumberException;
use FizzBuzzGenerator\Services\FizzBuzzService;

/**
 * @uses   FizzBuzzService
 * @covers FizzBuzzService::__construct
 */
class FizzBuzzServiceTest extends TestCase
{
    /** @return array<array<int, int|string>> */
    public static function FizzBuzzProvider(): array
    {
        return [
            [1, 1],
            [2, 2],
            [3, 'Fizz'],
            [4, 4],
            [5, 'Buzz'],
            [6, 'Fizz'],
            [7, 7],
            [8, 8],
            [9, 'Fizz'],
            [10, 'Buzz'],
            [11, 11],
            [12, 'Fizz'],
            [13, 13],
            [14, 14],
            [15, 'FizzBuzz'],
            [16, 16],
            [17, 17],
            [18, 'Fizz'],
            [19, 19],
            [20, 'Buzz'],
            [21, 'Fizz'],
            [22, 22],
            [23, 23],
            [24, 'Fizz'],
            [25, 'Buzz'],
            [26, 26],
            [27, 'Fizz'],
            [28, 28],
            [29, 29],
            [30, 'FizzBuzz'],
            [31, 31],
            [32, 32],
            [33, 'Fizz'],
            [34, 34],
            [35, 'Buzz'],
            [36, 'Fizz'],
            [37, 37],
            [38, 38],
            [39, 'Fizz'],
            [40, 'Buzz'],
            [41, 41],
            [42, 'Fizz'],
            [43, 43],
            [44, 44],
            [45, 'FizzBuzz'],
            [46, 46],
            [47, 47],
            [48, 'Fizz'],
            [49, 49],
            [50, 'Buzz']
        ];
    }

    public function testResultWhenPassingThree(): void
    {
        $fizzBuzzService = new FizzBuzzService();

        $this->assertSame('Fizz', $fizzBuzzService->calculateResult(3), 'Passing only one number: 3');
    }

    /** @dataProvider FizzBuzzProvider */
    public function testResultsWhenPassingOneToFifty($assertedNumber, $expectedResult): void
    {
        $fizzBuzzService = new FizzBuzzService();

        $this->assertEquals($expectedResult, $fizzBuzzService->calculateResult($assertedNumber), 'Passing number ' . $assertedNumber);
    }

    public function testExceptionThrownWhenPassingIntegerNull(): void
    {
        $fizzBuzzService = new FizzBuzzService();

        $this->expectException(FizzBuzzNegativeNumberException::class);
        $this->expectExceptionMessage('Failure: 0 should be greater than 0!');

        $fizzBuzzService->calculateResult(0);
    }
}
