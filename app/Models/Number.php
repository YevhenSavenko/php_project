<?php

namespace Models;

use System\CheckManager;

class Number
{

    public function getSumNumber(array $array): int
    {
        return array_sum($array);
    }

    public function getAverageNum(int $sum, int $count): float
    {
        return round(($sum / $count), 2);
    }

    public function checkEvenOddNums(array $array)
    {
        $tempEven = [];
        $tempOdd = [];
        $countEven = 0;
        $countOdd = 0;

        foreach ($array as $value) {
            if ($value % 2 === 0 || $value === '0') {
                $tempEven[] = $value;
                $countEven++;
            } else {
                $tempOdd[] = $value;
                $countOdd++;
            }
        }

        return [
            'even' => ['numsEven' => implode(', ', $tempEven), 'countEven' => $countEven],
            'odd' => ['numsOdd' => implode(', ', $tempOdd), 'countOdd' => $countOdd]
        ];
    }

    public function calculateInputData()
    {
        $processed = CheckManager::checkPOST('info');
        $crushedNum = [];

        if ($processed) {
            return $processed;
        }

        if (isset($_POST['numbers'])) {
            $crushedNum = explode(',', $_POST['numbers']);
        }

        if (is_array($crushedNum) && count($crushedNum) >= 1) {
            $sum = $this->getSumNumber($crushedNum);
            $average = $this->getAverageNum($sum, count($crushedNum));
            $evenOdd = $this->checkEvenOddNums($crushedNum);

            return [
                'sum' => $sum,
                'average' => $average,
                'evenOdd' => $evenOdd,
            ];
        }
    }

    private function calculatePhibonacci(int $qty, int $first = 0, int $second = 1)
    {
        $fibNum = [$first, $second];

        for ($i = 1; $i < $qty; $i++) {
            $fibNum[] = $fibNum[$i] + $fibNum[$i - 1];
        }

        return implode(', ', $fibNum);
    }

    private function calculatePhibonacciRecursion(int $qty)
    {
        if ($qty == 0) {
            return  0;
        }
        if ($qty == 1 || $qty == 2) {
            return 1;
        } else {
            return $this->calculatePhibonacciRecursion($qty - 1) + $this->calculatePhibonacciRecursion($qty - 2);
        }
    }

    public function getPhibonacciNum()
    {
        $processed = CheckManager::checkPOST('show-nums');

        if ($processed) {
            return ['error' => $processed];
        }

        if (isset($_POST['number-form']) && preg_match('/^\+?\d+$/', $_POST['number-form'])) {
            $phibonacci = $this->calculatePhibonacci((int)$_POST['number-form'] - 1);
            $phibonacciRecursion = [];

            for ($i = 0; $i < $_POST['number-form']; $i++) {
                $phibonacciRecursion[] = $this->calculatePhibonacciRecursion($i);
            }

            return [
                'classicMethod' => $phibonacci,
                'recursionMethod' => implode(', ', $phibonacciRecursion)
            ];
        } else {
            return ['error' => 'no number'];
        }
    }
}
