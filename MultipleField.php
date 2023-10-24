<?php
class MultipleField extends Field{
    protected $options = [];

    public function __construct($name, $type, $text, $default = "", $options = []) {
        parent::__construct($name, $type, $text, $default);
        $this -> options = $options;
    }

    public function addOption($text, $value){
        $this->options[$text] = $value;
    }

    public function render(){
        if($this->type == "select") $this->renderSelect();
        else $this->renderRadio();

    }

    private function renderSelect(){

        echo "<p><label for = \"id_$this->name\"> $this->text </label>\n";
        echo "<select id=\"id_$this->name\" name = \"$this->name\"> \n";

        foreach ($this->options as $text => $value) {
            $selected = ($text == $this->default) ? "selected" : " ";
            echo "<option value = \"$value\" $selected> $text </option>";
        }

        echo "</select>\n";
        echo "</p>\n";

    }

    private function renderRadio(){
        echo "<p> $this->text</p>";
        foreach ($this->options as $text => $value) {
            $id = str_replace(" ","-",$text);
            $checked = ($text == $this->default) ? "checked" : " ";
            echo "<p><input id=\"$id\" type = \"radio\" name = \"$this->name\" value = \"$value\" $checked>";
            echo "<label for = \"$id\">$text<label>"; 
            echo "</p>";
        }
    }
}