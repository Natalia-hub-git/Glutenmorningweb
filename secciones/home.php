<?php
require __DIR__ . '/../funciones/productos_lista.php';
$productos = getProductosRandom(4);
?>
<div class="bienvenidos_home">
    <h2>Bienvenidos</h2>
</div>
<div class="page-padding">
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 justify-content-center wow bounceInLeft">
                <div class="texto">
                    <h3>¡Envíos a todo el país!</h3>
                    <picture>
                        <img src="img/entregas.png" alt="camión de entregas"/>
                    </picture>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 justify-content-center wow bounceInRight">
                <h3>¡Descuentos especiales!</h3>
                <picture>
                    <img src="img/descuentos.png" alt="etiqueta de descuento"/>
                </picture>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 justify-content-center wow bounceInLeft">
                <h3>¡Cuotas sin interés, todas las tarjetas!</h3>
                <picture>
                    <img src="img/pagos.png" alt="tarjeta de crédito"/>
                </picture>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 justify-content-center wow bounceInRight">
                <h3>¡Ofertas todos los días!</h3>
                <picture>
                    <img src="img/ofertas.png" alt="etiqueta oferta"/>
                </picture>
            </div>
        </div>
    </section>
    <section id="padding-bottom-page">
        <h3 class="who-title wow bounce">¿Quiénes somos?</h3>
        <p>Somos una empresa familiar creada en el 2018 pudiendo ofrecer una solución para quienes quieren y deben consumir
            alimentos sin gluten, mediante una necesidad dentro de la familia nos pusimos en
            búsqueda de sabores variados y ricos, entonces así poco a poco emprendimos este camino, nos dedicamos a descubrir nuevas
            marcas, probarlas, recomendarlas y distribuirlas con la confianza de saber que fue aprobada por nuestros
            paladares.</p>
        <p></p>
    </section>
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="wow bounceInLeft">Destacados</h3>
            </div>
        </div>
        <div class="row wow bounce">
            <?php
            foreach ($productos as $producto):
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 justify-content-center mt-5 card">
                    <a href="index.php?s=producto_detalle&id=<?= $producto['producto_id'];?>">
                        <article>
                            <h4><?= $producto ['titulo']; ?></h4>
                            <p><?= $producto ['descripcion']; ?> </p>
                            <picture>
                                <source srcset="<?= 'img/big-'. $producto['imagen']; ?>" media="all and (min-width: 46.875em)">
                                <img class="home-picture-sizing" src="<?= 'img/' .  $producto['imagen']; ?>" alt="<?= $producto ['imagen_descripcion'];?>">
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
    <section id="padding-top-video">
        <h3 id="video" class="wow bounce">Recetas</h3>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-12 col-md-8 col-lg-10">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_bjgGJoXRvM" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
</div>