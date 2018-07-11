<?php declare(strict_types = 1);
/** Object Typehint
 *
 * @see https://wiki.php.net/rfc/object-typehint
 * @see http://php.net/manual/en/language.types.object.php (the docs. start here, anyway)
 */

/** The only highly conceptual (won't run) example on this presentation. 
 * Made like that on purpose to avoid too-simple-and-unrealistic examples
 * The idea is to return date of creation of a record or how long ago was created.
 */

function createdOrLastUpdated(Model $model): object
{
    if ($record = $gateway->find($model)) {
        $now  = new DateTime();
        $then = new DateTime($record->created);
        return $now->diff($then);
    } else {
        $model->persist();
        return new DateTime($model->created);
    }
}
