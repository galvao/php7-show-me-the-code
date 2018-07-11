<?php
/** NULL Coalesce
 *
 * @see https://wiki.php.net/rfc/isset_ternary
 * @see http://docs.php.net/manual/pl/migration70.new-features.php (the docs)
 */

$sorting = $_GET['sorting'] ?? 'ASC';
