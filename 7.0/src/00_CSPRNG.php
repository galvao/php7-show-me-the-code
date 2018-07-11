<?php
/** Easy User-land CSPRNG (Cryptographically Safe Pseudo-Random Number Generators)
 *
 * @see https://wiki.php.net/rfc/easy_userland_csprng (the original RFC)
 * @see http://php.net/manual/en/ref.csprng.php (the docs)
 */

$min = 0;
$max = 100;

printf('A random integer between %d and %d: %d' . PHP_EOL, $min, $max, random_int($min, $max));

$len = 12;

printf('A random string of cryptographic random bytes with length %d, converted to hexadecimal for viewing purposes: %s.' . PHP_EOL, $len, bin2hex(random_bytes($len)));
