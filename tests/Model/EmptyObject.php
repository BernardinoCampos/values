<?php
namespace BernardinoCampos\Values\Tests\Model;

use BernardinoCampos\Values\ChangedValuesTrait;
use BernardinoCampos\Values\ObjectsTrait;
use BernardinoCampos\Values\ValuesTrait;

class EmptyObject
{
    use ValuesTrait {
        getValue as public;
        setValue as public;
        addValue as public;
    }

    use ObjectsTrait {
        setObject as public;
        getObject as public;
        setObjects as public;
        getObjects as public;
        addObject as public;
    }

    use ChangedValuesTrait;

    public function __construct()
    {
        $this->registerChangedValuesHooks();
    }
}
