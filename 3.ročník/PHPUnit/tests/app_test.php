<?php
class CalcTest extends PHPUnit\Framework\TestCase
{
    public function testdeleni(): void
    {
        $cislo = 10; //Výsledek, který potřebujeme.
        $c = new calc();
        $this->assertSame($c->rozdil($x, $y), $cislo);
    }
    public function testscitani(): void
    {
        $cislo = 10; //Výsledek, který potřebujeme.
        $c = new calc();
        $this->assertSame($c->suma($x, $y), $cislo);
    }
    public function testnasobeni(): void
    {
        $cislo = 10; //Výsledek, který potřebujeme.
        $c = new calc();
        $this->assertSame($c->nasobeni($x, $y), $cislo);
    }
    public function testzbytpodeleni(): void
    {
        $cislo = 10; //Výsledek, který potřebujeme.
        $c = new calc();
        $this->assertSame($c->zbytek($x, $y), $cislo);
    }
    public function testpodil(): void
    {
        $cislo = 10; //Výsledek, který potřebujeme.
        $c = new calc();
        $this->assertSame($c->podil($x, $y), $cislo);
    }
}
