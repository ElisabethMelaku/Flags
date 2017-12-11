<?php
/**
 * Created by PhpStorm.
 * User: emela
 * Date: 04/12/2017
 * Time: 12:11
 */

namespace HTL3R\Flags\Flag;

use HTL3R\Flags\interfaces\FlagInterface as FlagInterface;

class RechtangleFlag extends AbstractFlag implements FlagInterface {
    //    calculate the area of the flag
//@return float area of the flag in m²

    public function calculateArea() : float{
        return $this->width*$this->height;
    }
}