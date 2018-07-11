<?php 
/** NULLable types
 *
 * @see https://wiki.php.net/rfc/nullable_types
 * @see http://php.net/manual/en/functions.arguments.php (the docs. Start here....)
 */
function sum(?int $num1 = 0, ?int $num2 = 0): ?int
{
    if (func_num_args() === 0) {
        return NULL;
    }
    
    return $num1 + $num2;
}

$n1 = 38;
$n2 = 4;

printf('Sum equals to %d' . PHP_EOL, sum($n1, $n2));
printf('Sum equals to %d' . PHP_EOL, sum($n1));
printf('Sum equals to %d' . PHP_EOL, sum($n1, NULL));
printf('Sum equals to %d' . PHP_EOL, sum());
