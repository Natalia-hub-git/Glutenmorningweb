<?php 
    require __DIR__ . '/../funciones/productos_lista.php';
    $productos =  getProductos();
?>
<div class="bienvenidos_productos">
    <h2>Nuestros productos</h2>
</div>
<div class="page-padding">
<section class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h3 class="wow bounce">Tienda</h3>
        </div>
    </div>
    <div class="row">
        <?php
        foreach ((array) $productos as $producto):
            ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 justify-content-center mt-5 card">
            <a href="index.php?s=producto_detalle&id=<?= $producto['producto_id'];?>">
                <article>
                    <h4><?= $producto ['titulo']; ?></h4>
                    <p><?= $producto ['descripcion']; ?> </p>
                    <picture class="img-fluid">
                        <source srcset="<?= 'img/big-'. $producto['imagen']; ?>" media="all and (min-width: 46.875em)">
                        <img class="product-picture-sizing" src="<?= 'img/' .  $producto['imagen']; ?>" alt="<?= $producto ['imagen_descripcion'];?>">
                    </picture>
                    <p>Precio: <?= $producto['precio'];?></p>
                </article>
            </a>
            <button class="btn-success btn">Comprar</button>
        </div>
        <?php
        endforeach;
        ?>
    </div>
</section>
</div>