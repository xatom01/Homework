<?php
require "Grid.php";
$g = new Grid("g2");
var_dump($g->isValid());
echo $g->toHtml();
$g->rotate();
echo $g->toHtml();
