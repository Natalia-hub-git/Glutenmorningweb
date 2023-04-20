<?php

function getProductos(): array {
    $nombreArchivoProductos = "archivos/productos.json";
    $contenidoArchivoProductos = file_get_contents($nombreArchivoProductos);
    return (array) json_decode($contenidoArchivoProductos, true);
}

function getProductosRandom($cantidadSolicitadaProductos): array {
    $productos = getProductos();

    $cantidadProductos = count($productos);
    if($cantidadSolicitadaProductos >= $cantidadProductos) {
        return $productos;
    }

    $productosRandom = [];
    for($i = 0; $i < $cantidadSolicitadaProductos; $i++){
        $numeroProductoRandom = rand(0, $cantidadProductos-1);
        $productoRandom = $productos[$numeroProductoRandom];
        while(existe($productoRandom, $productosRandom)) {
            $numeroProductoRandom = rand(0, $cantidadProductos-1);
            $productoRandom = $productos[$numeroProductoRandom];
        }

        array_push($productosRandom, $productoRandom);
    }

    return $productosRandom;
}

function existe($numeroProductoRandom, $productosRandom): bool {
    foreach ($productosRandom as $producto) {
        if ($producto ['producto_id'] === $numeroProductoRandom ['producto_id']) {
            return true;
        }
    }
    return false;
}
function getProductoById(int $id) {
    $productos = getProductos();
    foreach ($productos as $producto){
        if ($producto['producto_id'] === $id){
            return $producto;
        }
    }
}

