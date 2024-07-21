<?php

namespace App\Helpers;


class IncomeHelper
{


    public static function calculateTotalNetIncome($revenue, $tax)
    {
        return $revenue > 0 ? $revenue * (1 - $tax / 100) : 0;
    }


    public static function calculatePercentageAndIncome($time, $totalTime, $totalIncome)
    {
        $percentage =  $totalTime > 0 ? round(($time / $totalTime) * 100, 2)  : 0;
        $income = $percentage > 0 ? (int) round(($totalIncome * $percentage / 100), 0) : 0;
        return (object)[
            'percentage' => $percentage,
            'income' => $income
        ];
    }
}
