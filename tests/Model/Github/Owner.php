<?php
namespace BernardinoCampos\Values\Tests\Model\Github;

use BernardinoCampos\Values\ValuesTrait;

class Owner
{
    use ValuesTrait;

    public function getId()
    {
        return $this->getValue('id');
    }

    public function getLogin()
    {
        return $this->getValue('login');
    }
}
