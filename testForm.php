<?php
require_once "Form.php";
require_once "Field.php";

    $form1 = new Form("validate.php","Prueba form","POST");
    
    $field1 = new Field("Campo 1", "text");
    $form1->add($field1);
    $form1-> add(new Field("Campo 2","number"));
    $form1-> add(new Field("Campo 3","color"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 1px solid green;
        }
    </style>
</head>
<body>
    <h1>Pruebas con formulario</h1>
    <?php $form1->render(); ?>
    
</body>
</html>