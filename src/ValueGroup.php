<?php
namespace CLIFramework;

use ArrayObject;

class ValueGroup extends ArrayObject
{
    public function values()
    {
        return array_values($this->getArrayCopy());
    }

    public function keys()
    {
        return array_keys($this->getArrayCopy());
    }

    public function append(mixed $val) : void
    {
        parent::append($val);
    }


    public function add($val)
    {
        parent::append($val);

        return $this;
    }
}
