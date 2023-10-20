<?php

class Field{
    private $name;
    private $type;

    public function __construct($name, $type){
        $this -> name = $name;
        $this -> type = $type;
    }

    public function render(){
        echo "<p><label for = \"id_$this->name\"> $this->name: </label>\n";
        echo "<input id=\"id_$this->name\" type= \"$this->type\" name = \"$this->name\"></input></p>\n";
    }
}