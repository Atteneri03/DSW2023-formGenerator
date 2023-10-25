<?php
require_once "Renderizable.php";

abstract class Element implements Renderizable{
    abstract public function render();
}