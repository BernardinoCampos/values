<?php
namespace BernardinoCampos\Values\Tests\Model;

use BernardinoCampos\Values\CastTrait;
use function BernardinoCampos\Values\register_cast_hooks;

class CastableObject extends EmptyObject
{
    use CastTrait;

    public function __construct()
    {
        parent::__construct();

        register_cast_hooks($this);
    }
}
