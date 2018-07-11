<?php
/** filtered_unserialize
 *
 * @see https://wiki.php.net/rfc/secure_unserialize
 * @see http://php.net/manual/en/function.unserialize.php (the docs)
 */
$rcvdObject = unserialize($serializedObject,
    ['allowed_classes' => TRUE]
);

$rcvdObject = unserialize($serializedObject,
    ['allowed_classes' => FALSE]
);

$rcvdObject = unserialize($serializedObject,
    ['allowed_classes' => ['Foo', 'Bar', 'Baz']]
);
