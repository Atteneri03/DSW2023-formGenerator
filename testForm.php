<?php
require_once "Form.php";
require_once "SimpleField.php";
require_once "MultipleField.php";


    $form1 = new Form("validate.php","Prueba form","POST");
    
    $simpleField1 = new SimpleField("name", "text", "Nombre:","Valor por defecto");
    $form1->add($simpleField1);
    $form1-> add(new SimpleField("age","number","Edad:","18"));
    $form1-> add(new SimpleField("color","color","Color favorito", "#FF0000"));
    $form1-> add(new SimpleField("suscripcion","checkbox","¿Quieres suscribirte?","true"));

    $options = [
        "Desarrollo en entorno servidor" => "DSW",
        "Desarrollo en entorno cliente" => "DEW",
        "Despliegue de aplicaciones" => "DPL"
    ];
    $multipleField1 = new MultipleField("preferido","radio","¿Cual es tu modulo preferido?","Despliegue de aplicaciones", $options);

    $form1->add($multipleField1);
    $multipleField1->addOption("Diseño de interfaces web", "DOR");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 2px solid green;
        }
    </style>
</head>
<body>
    <h1>Pruebas con formulario</h1>
    <?php $form1->render(); ?>
    
</body>
</html>