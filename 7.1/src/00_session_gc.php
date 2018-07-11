<?php
/** Explicit Session GC
 *
 * @see https://wiki.php.net/rfc/session-gc
 * @see http://php.net/manual/en/function.session-gc.php (the docs)
 */

session_start([
    'gc_probability' => 0,
]);

session_gc();
session_destroy();
