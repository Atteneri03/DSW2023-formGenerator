<?php
class Document{
    private $title;
    private $elements = [];

    public function __construct($title){
        $this->title = $title;
    }

    public function add(Renderizable $element){
        $this->elements[] = $element;
    }

    public function render(){
    ?> 
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?=$this->title;?></title>
        </head>
        <body>
            <?php
                foreach ($this->elements as $element) {
                    echo "<div>";
                    $element->render();
                    echo "</div>";

                }
            ?>
        </body>
        </html>
    <?php
    }

}

