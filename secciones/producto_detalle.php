<?php
require_once __DIR__ . '/../funciones/productos_lista.php';
$id = (int) $_GET['id'];
$producto = getProductoById($id);
?>
<section class="page-padding">
    <div>
        <p class="h4 wow bounce"><a href="index.php?s=productos">Seguir comprando</a><p>
    </div>
    <h4>Detalle del producto</h4>
    <div class="container-fluid">
        <article class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 justify-content-center mt-5 text-left">
                <h4><?= $producto ['titulo']; ?></h4>
                <p><?= $producto ['descripcion']; ?> </p>
                <p><?= $producto['imagen_descripcion']; ?></p>
                <div><p>Ingredientes:</p><?= $producto['texto']; ?></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 justify-content-center mt-5">
            <picture class="img-fluid">
                <source srcset="<?= 'img/big-'. $producto['imagen']; ?>" media="all and (min-width: 46.875em)">
                <img src="<?= 'img/' .  $producto['imagen']; ?>" alt="<?= $producto ['imagen_descripcion'];?>">
            </picture>
            </div>
        </article>
        <p>Precio: <?= $producto['precio'];?></p>
        <button class="btn-success btn">Comprar</button>
    </div>
</section>
