<?php
namespace BernardinoCampos\Values\Tests\Model\Github;

use BernardinoCampos\Values\ValuesTrait;

class GistFile
{
    use ValuesTrait;

    public function __construct($content)
    {
        $this->setValue('content', $content);
    }
}