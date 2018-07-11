<?php
/** Libsodium
 *
 * @see https://wiki.php.net/rfc/libsodium
 * @see http://php.net/manual/en/book.sodium.php
 * @see https://github.com/paragonie/pecl-libsodium-doc
 */

$key   = random_bytes(32);
$nonce = random_bytes(24); 

$message = 'Libsodium goes way beyond simple encryption. Dig deep on those links!';

$cipherText = sodium_crypto_secretbox($message, $nonce, $key);
$plainText  = sodium_crypto_secretbox_open($cipherText, $nonce, $key);

var_dump(bin2hex($cipherText), $plainText);
