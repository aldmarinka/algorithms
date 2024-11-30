<?php
namespace App;
class BinarySearch
{
    /**
     * @param array $arr
     * @param int   $item
     *
     * @return bool|int
     */
    public function binarySearch(array $arr, int $item): bool|int
    {
        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {
            $middle = (int) floor(($low + $high) / 2);
            $guess = $arr[$middle];

            if ($guess === $item) {
                return $middle;
            }

            if ($guess > $item) {
                $high = $middle - 1;
            } else {
                $low = $middle + 1;
            }
        }

        return false;
    }
}