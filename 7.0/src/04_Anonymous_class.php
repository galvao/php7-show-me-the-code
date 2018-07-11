<?php
/** Anonymous Class
 *
 * @see https://wiki.php.net/rfc/anonymous_classes
 * @see http://php.net/manual/en/language.oop5.anonymous.php (the docs)
 */

$hiker = new class (42, 'Zaphod Beeblebrox') {
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }
};

var_dump($hiker);
