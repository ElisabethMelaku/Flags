<?php
/**
 * Created by PhpStorm.
 * User: emela
 * Date: 04/12/2017
 * Time: 12:12
 */
namespace HTL3R\Flags\Flags;

use HTL3R\Flags\interfaces\FlagInterface as FlagInterface;

class TriangleFlag extends AbstractFlag implements FlagInterface {
    public function calculateArea() : float{
        return ($this->width*$this->height)/2;
    }
}
