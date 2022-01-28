<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POO en PHP</h2>
    <?php echo "<h3>Clases y objetos</h3>";
    require('./clases/clase1.php');
    require('./clases/Cliente.php');
    require('./clases/Productos.php');
    $objeto=new ClasePropiedades();//instanciar
    echo $objeto->stock;
    echo "<br>";
    $cliente1=new Cliente("indra",5,true);
    echo $cliente1->getNombre();
    //modifica el nomnre del cliente
    echo "<br>";
    $cliente1->setNombre("Repsol");
    //consulta el nombre de nuevo para ver el cambio
    echo $cliente1->getNombre();

    $producto1=new Productos("100","camisa",5,7.99);
    echo "<br>";
    //echo $producto1->getPrecio();
    $producto1->setPrecio(7.95);
    echo "<br>";
    echo $producto1->getPrecio();

    echo "<br>";
    echo "<h4>El precio total de la factura es: </h4>";


    ?>
</body>
</html>