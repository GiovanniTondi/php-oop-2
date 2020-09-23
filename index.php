<?php

    class Square
    {

        public $lato;

        public function __construct($lato)
        {
            $this->lato = $lato;
        }

        public function getArea()
        {
            return $this->lato * $this->lato;
        }

        public function getPer()
        {
            return 4 * $this->lato;
        }

        public function getStr()
        {
            return "Quadrato: <br />Lato: " . $this->lato . "<br />"
                 . "Perimetro: " . $this->getPer() . "<br />"
                 . "Area: " . $this->getArea() . "<br />";
        }

        public function __toString()
        {
            return $this->getStr() . "<br />";
        }
    }

    class Cube extends Square
    {

        public function getVol()
        {
            return $this->lato * $this->lato * $this->lato;
        }

        public function getSur()
        {
            return 6 * $this->lato;
        }

        public function getStr()
        {
            return "Cubo: <br />Lato: " . $this->lato . "<br />"
                 . "Superficie: " . $this->getSur() . "<br />"
                 . "Volume: " . $this->getVol() . "<br />";
        }
    }


    $sq1 = new Square(10);
    $sq2 = new Square(20);

    $cb1 = new Cube(10);
    $cb2 = new Cube(20);

    echo $sq1;
    echo $sq2;

    echo $cb1;
    echo $cb2;
