<?php
/** session_start() options
 *
 * @see https://wiki.php.net/rfc/session-lock-ini
 * @see http://php.net/manual/en/function.session-start.php (the docs)
 */

session_start([
    'name'             => bin2hex(random_bytes(8)),
    'referer_check'    => 'foo*',
    'use_only_cookies' => 1,
    'use_trans_sid'    => 0,
    'cookie_httponly'  => 1,
    'cookie_secure'    => 1,
    'cookie_lifetime'  => 0,
    'save_handler'     => 'files',
    'save_path'        => __DIR__ . '/../data/session',
    'use_strict_mode'  => 1,
    'sid_length'       => 128,
]);
