<?php

namespace Models;

use System\CheckManager;

class Name
{
    private $alphabet;

    public function sortUA(string $fistName, string $secondName)
    {
        $index1 = -1;
        $index2 = -1;

        $lengthFirstName = mb_strlen($fistName);
        $lengthSecondName = mb_strlen($secondName);

        $fewLength = $lengthFirstName > $lengthSecondName ? $lengthSecondName : $lengthFirstName;

        for ($i = 0; $i < $fewLength; $i++) {
            $letterFirstName = mb_substr($fistName, $i, 1);
            $letterSecondName = mb_substr($secondName, $i, 1);

            for ($j = 0; $j < count($this->alphabet); $j++) {
                if ($letterFirstName === $this->alphabet[$j]) {
                    $index1 = $j;
                }

                if ($letterSecondName === $this->alphabet[$j]) {
                    $index2 = $j;
                }
            }

            if ($index1 !== $index2) {
                break;
            }
        }

        if ($index1 === $index2) {
            return 0;
        }

        return $index1 < $index2 ? -1 : 1;
    }

    public function crusherName(string $str)
    {
        $names = explode(',', $str);
        $nameUA = [];
        $nameEN = [];

        foreach ($names as $value) {
            if (preg_match('/[а-яіїєґ]/iu', trim($value))) {
                $nameUA[] = trim($value);
            }

            if (preg_match('/[a-z]/iu', trim($value))) {
                $nameEN[] = trim($value);
            }
        }

        if (!empty($nameEN) && count($nameEN) > 1) {
            sort($nameEN, SORT_STRING);
        }

        if (!empty($nameUA) && count($nameUA) > 1) {
            $this->alphabet = require_once ROOT . '/app/config/alphabetUA.php';
            usort($nameUA, [$this, 'sortUA']);
        }

        return array_merge($nameEN, $nameUA);
    }

    public function getStr(array $data)
    {
        foreach ($data as &$value) {
            $value = ucfirst($value);

            if (preg_match('/[а-яіїєґ]/iu', $value)) {
                $value = mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
            }
        }
        unset($value);

        return implode(', ', $data);
    }



    public function sortNames()
    {
        $processed = CheckManager::checkPOST('sort');

        if ($processed) {
            return $processed;
        }

        if (isset($_POST['names'])) {
            $processed = $this->crusherName(mb_strtolower($_POST['names']));
        }

        if (is_array($processed) && count($processed) > 0) {
            return [
                'sorted' => $this->getStr($processed),
                'status' => 'ok'
            ];
        }

        return ['' => 0];
    }
}
