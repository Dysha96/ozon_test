<?php

namespace App;

function binarySearch(array $array, $value): bool|int
{
    $length = count($array);
    if ($length === 0) {
        return false;
    }

    $start = 0;
    $end = $length - 1;

    if ($array[$start] < $array[$end]) {
        $isAscending = true;
    } elseif ($array[$start] > $array[$end]) {
        $isAscending = false;
    } else {
        return 0;
    }

    while ($start !== $end) {
        $len = $end - $start;

        if ($len >= 1) {
            $mid = (int)floor($len / 2 + $start);
        } else {
            return false;
        }

        if ($isAscending ? ($array[$mid] < $value) : ($array[$mid] > $value)) {
            $start = $mid + 1;
        } else {
            $end = $mid;
        }
    }

    return $start;
}

function fullSearch(array $array, $value): bool|int
{
    foreach ($array as $key => $item) {
        if ($item === $value) {
            return $key;
        }
    }
    return false;
}

function isInclude($array, $subArray): bool
{
    if ($subArray === []) {
        return true;
    }

    $startKey = binarySearch($array, $subArray[0]);
    if ($startKey === false) {
        return false;
    }

    $lengthArray = count($array);
    $lengthSubArray = count($subArray);

    for ($i = $startKey; $i < $lengthArray; $i++) {
        foreach ($subArray as $j => $jValue) {
            if ($lengthSubArray > $lengthArray - $i) {
                return false;
            }
            if ($array[$i + $j] === $jValue) {
                continue;
            }
            if ($j === 0) {
                return false;
            }
            continue 2;
        }
        return true;
    }
    return false;
}
