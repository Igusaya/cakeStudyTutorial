<?php
/**
 * Created by PhpStorm.
 * User: Igusaya
 * Date: 2018/01/06
 * Time: 22:23
 */

namespace App\Utils;


use Cake\Log\Log;

class MyLogger {

    public static function startMethod(string $methodName) {
        Log::write('debug',$methodName . ' : str ↓');
    }

    public static function endMethod(string $methodName) {
        Log::write('debug',$methodName . ' : end ↑');
    }


}