<?php
namespace BernardinoCampos\Values\Tests\Model\Github;

use BernardinoCampos\Values\ObjectsTrait;
use BernardinoCampos\Values\ValuesTrait;

class Gist
{
    use ValuesTrait;
    use ObjectsTrait;

    public function setDescription($description)
    {
        $this->setValue('description', $description);
    }

    public function setPublic($bool)
    {
        $this->setValue('public', $bool);
    }

    public function addFile($fileName, GistFile $file)
    {
        $this->addObject('files', $file, $fileName);
    }
}
