<?php
/** PDOStatement Debug
 *
 * @see https://wiki.php.net/rfc/debugging_pdo_prepared_statement_emulation_v2
 * @see http://php.net/manual/en/class.pdostatement.php (the docs)
 */

$dsn = 'pgsql:host=foo;dbname=bar';
$dbh = new PDO($dsn, 'baz', 'quux');

$id = 2;

$sql = 'SELECT * FROM server WHERE id = :id';

$sth = $dbh->prepare($sql);
$sth->bindValue(':id', $id, PDO::PARAM_INT);

var_dump($sth->debugDumpParams());

$sth->execute();

while($record = $sth->fetchObject()) {
    var_dump($record);
}

$dbh = NULL;
