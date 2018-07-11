<?php
/** Void Return type
 *
 * @see https://wiki.php.net/rfc/void_return_type
 * @see http://php.net/manual/en/language.pseudo-types.php (the docs)
 */
function increment(int &$num): void
{
    $num++;
    
    return;
}

$x = 1;
increment($x);
printf('X equals to %d' . PHP_EOL, $x);
