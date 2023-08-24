<?php

require 'Producto.php';
require 'ProductoSimple.php';
require 'Burger.php';
require 'Papas.php';
require 'Gaseosa.php';
require 'Combo.php';

$burger = new Burger('Lorem ipsum dolor sit amet consectetur adipisicing elit', 2500);
$papas = new Papas('Unde cumque voluptatibus ab dolor, quam quae blanditiis', 1800);
$gaseosa = new Gaseosa('In laudantium impedit quae', 2300);
$combo = new Combo('Minus, deserunt eveniet sapiente nihil aliquam distinctio');

$combo->agregarProducto($burger);
$combo->agregarProducto($papas);
$combo->agregarProducto($gaseosa);

$productos = [$burger, $papas, $gaseosa, $combo];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1>Nuestros Productos</h1>
            </div>
            <?php foreach($productos as $producto): ?>
                <div class="col-md-3 mt-3">
                    <div class="card" style="width: 18rem;">
                        <img src="productos/<?php echo $producto->getImagen(); ?>" class="card-img-top" alt="<?php echo $producto->getTitulo(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto->getTitulo(); ?></h5>
                            <p class="card-text"><?php echo $producto->getDescripcion(); ?></p>
                            <p class="lead fw-bold">$<?php echo $producto->getPrecio(); ?></p>
                            <a href="#" class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>