<?php
/** Multiple Catches
 *
 * @see https://wiki.php.net/rfc/multiple-catch
 * @see http://php.net/manual/en/language.exceptions.php (the docs)
 */

function hitchHike($towel = NULL)
{
    if (func_num_args() > 1) {
        throw new ArgumentCountError('Too many arguments!');
    }

    if ($towel === NULL) {
        throw new Exception('Never leave home without a towel!');
    }
}

try {
    hitchHike(NULL, 'foo');
} catch (ArgumentCountError | Exception $e) {
    printf('> %s' . PHP_EOL, $e->getMessage());
}
