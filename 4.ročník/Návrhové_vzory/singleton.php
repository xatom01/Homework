<?php
class Singleton //Třída singletone.
{
  private static $instance = false; // Vytvoříme statickou proměnnou $instance, které dáme hodnotu false.
  public $vlastnost; //Vytvoříme veřejnou proměnnou s názvem $vlastnost.
  public static function getInstance() // Vytvoříme si veřejnou funkci s názvem getInstance.
  {
    if (self::$instance === false) {
      self::$instance = new Singleton; // Pokud je v proměnné instance false vytvoříme nový objekt singletone.
    }
    return self::$instance; // Vrátíme proměnnou instance, ve které se nachází singletone.
  }
}

$a = Singleton::getInstance(); // Do proměnné $a vložíme funkci getInstance.
$b = Singleton::getInstance(); // Do proměnné $b vložíme funkci getInstance.
$a->vlastnost = "Vypiš mi něco."; // Do proměnné $a vložíme vlastnost "Vypiš mi něco.".
print $b->vlastnost; // Vypíšeme si hodnotu, která se nachází v proměnné $b což odpovídá hodnotě v proměnné $a.
?>