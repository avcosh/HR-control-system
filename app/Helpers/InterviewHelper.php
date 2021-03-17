<?php
namespace App\Helpers;
use App\Models\Interview;

class InterviewHelper
{
    public static function getStatusList()
    {
        return [
            Interview::STATUS_NEW => 'New',
            Interview::STATUS_PASS => 'Passed',
            Interview::STATUS_REJECT => 'Rejected',
        ];
    }

    public static function getStatusName($status)
    {
        return ArrayHelper::getValue(self::getStatusList(), $status);
    }
} 