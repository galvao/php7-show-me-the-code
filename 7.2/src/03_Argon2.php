<?php
/** Argon2
 *
 * @see https://wiki.php.net/rfc/argon2_password_hash
 * @see http://php.net/manual/en/book.password.php (the docs)
 */

$submittedPwd = 'a damn fine pass';
$hashedPwd    = password_hash($submittedPwd, PASSWORD_ARGON2I);

var_dump($hashedPwd);
