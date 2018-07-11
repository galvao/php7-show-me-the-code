<?php declare(strict_types = 1);
/** Scalar Type Hints + Return Type Declarations + Strict
 *
 * @see https://wiki.php.net/rfc/scalar_type_hints_v5
 * @see https://wiki.php.net/rfc/return_types
 * @see http://php.net/manual/en/language.types.php (the docs... well, start here anyway =) )
 */

class Hiker 
{
    private $id;
    private $name;

    public function __construct(int $id, string $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }
}

$zaphod = new Hiker(42, 'Zaphod Beeblebrox');
printf('The most important id in the Universe: %d' . PHP_EOL, $zaphod->getId());
