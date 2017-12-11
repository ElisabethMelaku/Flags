<?php
/**
 * Created by PhpStorm.
 * User: emela
 * Date: 04/12/2017
 * Time: 11:59
 */

namespace HTL3R\Flags\Flag;

abstract class AbstractFlag{
    protected $name;
    protected $preis;
    protected $width;
    protected $height;
    protected $color;

    /**
     * Flag constructor.
     * @param string $name Name of the Flag
     * @param float $preis Preis of the Flag
     * @param float $width Width of the Flag
     * @param float $height Height of the flag
     * @param float $area Area of the flag
     * @param float $color color of the flag
     */

    //Konstruktor zum Erstellen der Klasse
    // verwendet das reservoerte Wort __construct
    function __construct(string $name,
                         float $preis,
                         float $width,
                         float $height,
                         string $color){
        $this->name = $name;
        $this->preis = $preis;
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }


    // return wert steht nach :
    function __toString() : string{
        // TODO: Implement __toString() method.
        //$area = $this->calculateArea();
        //$area=5;
        $rv = <<<EOT
            Name: $this->name <br />
            Preis: $this->preis <br />
            Width: $this->width <br />
            Height: $this->height <br /> 
            Color: <div style="width:10px; height:10px; background-color:$this->color"</div><br />
EOT;
        return $rv;
    }
}