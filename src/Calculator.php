<?php
/**
 * @author Serge Rodovnichenko <sergerod@gmail.com>
 * @copyright Serge Rodovnichenko, 2023
 * @license MIT
 */

namespace SergeR\SimpleFormula;

class Calculator
{
    public static function calc(string $formula = '', float $value = 0.0): float
    {
        if (!strlen($formula = trim($formula))) return 0.0;
        $clear_conditions = preg_replace('/\\s+/', '', $formula);
        $conditions_list = preg_split('/[+\-*\/]/', $clear_conditions, -1, PREG_SPLIT_OFFSET_CAPTURE | PREG_SPLIT_NO_EMPTY);

        $total = 0.0;

        foreach ($conditions_list as $condition) {
            $condition_val = trim($condition[0]);
            if (strpos($condition_val, '%')) {
                $condition_val = $value * floatval($condition_val) / 100;
            } else {
                $condition_val = floatval($condition_val);
            }

            if ($condition[1]) {
                switch (substr($clear_conditions, $condition[1] - 1, 1)) {
                    case '-':
                        $total -= $condition_val;
                        break;
                    case '+':
                        $total += $condition_val;
                        break;
                    case '*':
                        $total *= $condition_val;
                        break;
                    case '/':
                        $total /= $condition_val;
                }
            } else $total += $condition_val;
        }

        return $total;
    }
}
