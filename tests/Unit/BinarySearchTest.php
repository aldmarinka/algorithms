<?php
namespace Tests\Unit;

use App\BinarySearch;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    public static function binaryData(): array
    {
        return [
            [[], 0, false],
            [[], 1, false],
            [[100, 200, 300, 400, 500], 10, false],
            [[10, 20, 70, 100, 110], 70, 2],
        ];
    }

    #[DataProvider('binaryData')]
    public function testBinarySearch($arr, $actual, $expected)
    {
        $result = (new BinarySearch())->binarySearch($arr, $actual);
        $this->assertEquals($expected, $result);
    }
}