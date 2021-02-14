<?php

/**
 * Grid class
 * @author Name
 * @todo write the methods content
 */
class Grid
{
    /**
     * Grid representation
     *
     * @var array
     */
    private $grid = [];

    function __construct(string $gridFilename)
    {
        $this->load($gridFilename);
    }

    /**
     * Load the grid from file to array
     *
     * @param string $filename
     * @return bool success
     */
    public function load(string $filename): bool
    {
        return true;
    }

    /**
     * Check if is grid valid
     * 1) square shape
     * 2) even number of columns and rows
     * 3) maximum number of holes
     * 4) the holes are not overwritten after rotation
     *
     * @return bool true if is grid valid, otherwise false
     */
    public function isValid(): bool
    {
        return true;
    }

    /**
     * Rotate the grid by 90 degrees
     *
     * @return void
     */
    public function rotate()
    {
        /*
        $g = [
            [0, 1, 1, 1],
            [1, 1, 0, 1],
            [1, 1, 1, 1],
            [1, 1, 0, 1],
        ];
        
        //transponovaná matice
        $g = [
            [0, 1, 1, 1],
            [1, 1, 1, 1],
            [1, 0, 1, 0],
            [1, 1, 1, 1],
        ];
        
        //obrácené pořadí na řádku - prohození sloupců
        $g = [
            [1, 1, 1, 0],
            [1, 1, 1, 1],
            [0, 1, 0, 1],
            [1, 1, 1, 1],
        ];
        */
    }

    /**
     * Render the grid to html table
     *
     * @return string
     */
    public function toHtml(): string
    {
        return "<table></table>";
    }
}
