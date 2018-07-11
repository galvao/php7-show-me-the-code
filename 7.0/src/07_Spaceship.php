<?php
/** Spaceship
 *
 * @see https://wiki.php.net/rfc/group_use_declarations
 * @see http://php.net/manual/en/language.namespaces.importing.php (the docs)
 */

$o0 = new class() { public $id = 1; };
$o1 = new class() { public $id = 0; };
$a0 = [2, 4];
$a1 = [2, 4];
$s0 = '123';
$s1 = '321';

var_dump($o0 <=> $o1); // 1
var_dump($a0 <=> $a1); // 0
var_dump($s0 <=> $s1); // -1
