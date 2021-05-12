<?php
class calc{
    public function zbytek(int $x, int $y){ //Vypočítá zbytek po dělení čísel x a y.
        return $x % $y;
    }
    public function suma(int $x, int $y){ //Vypočítá součet čísel x a y.
        return $x + $y;
    }
    public function rozdil(int $x, int $y){ //Vypočítá rozdíl čísel x a y.
        return $x - $y;
    }
    public function podil(int $x, int $y){ //Vypočítá podíl čísel x a y.
        return $x / $y;
    }
    public function nasobeni(int $x, int $y){ //Vypočítá násobek čísel x a y.
        return $x * $y;
    }
}