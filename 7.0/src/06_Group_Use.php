<?php
/** Group Use
 *
 * @see https://wiki.php.net/rfc/group_use_declarations
 * @see http://php.net/manual/en/language.namespaces.importing.php (the docs)
 */

require '_someAutoloader.php';

use Foo\{
        Foo,
        Bar\Baz,
        Bar\Quux
};

use Quuz\Grault;

$foo    = new Foo();
$baz    = new Baz();
$quux   = new Quux();
$grault = new Grault();
