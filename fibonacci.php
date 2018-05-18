<?php
/**
 * Created by PhpStorm.
 * User: akacprzak
 * Date: 2018-05-18
 * Time: 11:17
 */

function f1(int $n): int
{
    if ($n < 0) {
        throw new Exception("minus value");
    }
    if ($n == 0) return 0;
    elseif ($n == 1) return 1;
    else {
        return f1($n - 1) + f1($n - 2);
    }
}

try {
    echo "Argument valid: ". f1(-12);

} catch (Exception $e) {

    echo 'Message: ' . $e->getMessage().'<br>';
    echo 'In file: '.$e->getFile().'<br>';
    echo 'In line: '.$e->getLine().'<br>';

}
