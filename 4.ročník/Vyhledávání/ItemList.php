<?php
class itemList
{
    /**
     * item List item$items
     *
     * @var item$items
     */
    private $items;

    /**
     * Constructor
     * Creates empty list
     */
    function __construct()
    {
        $this->items = [];
    }

    /**
     * Add item to the item list
     * 
     * item list is always sorted after adding an item.
     * @param mixed $item what we are adding
     * @return itemList
     */
    public function add($item): itemList
    {

        $this->items[] = $item; //example only
        return $this;
    }

    /**
     * Checks if is the item in the list
     * 
     * Use binary-search-algorithm
     * @param mixed $searched what we are searching for
     * @return boolean true if the searched is in the list, otherwise false
     */
    public function isIn($searched): bool
    {
        foreach ($this->items as $items) { //example only
            if ($items === $searched) {
                return true;
            }
        }
        return false;
    }
    public function binary_search(int $items)
    {
        $left = 0;
        $right = count($items) - 1;

        if (($items < $items[$left]) || ($items > $items[$right])) // Pokud je prvek mimo rozsah pole.
            return "Prvek se v poli nenachází.";
        while ($left <= $right) {
            $center = (int)(($left + $right) / 2); // Výsledek prostřední hodnoty potřebujeme v kladném čísle proto ho převedeme na int.
            if ($items == $items[$center])
                return $center; // Pokud je číslo nalezeno, vypíšeme ho.
            else
                  if ($items < $items[$center]) 
                $right = $center - 1; //Pokud se nacházíme u prostředního čísla odečteme číslo 1.
            else
                $left = $center + 1; //Pokud se nenacházíme u prostředního čísla přičteme číslo 1.
        }
    }
}
