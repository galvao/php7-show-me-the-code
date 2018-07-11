<?php
/** Constant Visibility
 *
 * @see https://wiki.php.net/rfc/class_const_visibility
 * @see http://php.net/manual/en/language.oop5.constants.php (the docs)
 */

class Foo
{
    public  const BAR = 2;
    private const BAZ = 4;
}

printf('%d - %d' . PHP_EOL, Foo::BAR, Foo::BAZ);
