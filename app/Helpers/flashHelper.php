<?php

namespace App\Helpers;


class flashHelper {

    public static function success($message)
    {
        flash()->options([
            'timeout' => 5000, // 5 seconds
            'position' => 'top-center',
        ])->addSuccess($message);
    }

    public static function error($message)
    {
        flash()->options([
            'timeout' => 5000, // 5 seconds
            'position' => 'top-center',
        ])->addError($message);
    }

}