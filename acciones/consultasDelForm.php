<?php

//require_once __DIR__ . '/../funciones/productos_lista.php';

/*
 * 1.Levantar variables del formulario => listo
 * 2.Tener variable con nombre del archivo. =>listo
 * 3.Obtener el contenido del archivo => listo
 * 4.Transformar el archivo en array =>listo
 * 5.Agregar nuevo contenido => listo
 * 6.Transformar array en JSON =>listo
 * 7.Agregar el json al archivo
*/

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$nombreArchivoFormularioConsultas = "../archivos/consultas.json";

$contenidoFormularioConsultas = file_get_contents($nombreArchivoFormularioConsultas);

$consultas = json_decode($contenidoFormularioConsultas, true);

$consultas[] = [
    'nombre' => $nombre,
    'correo' => $correo,
    'mensaje' => $mensaje
];

$arrayComoJSON = json_encode($consultas);

file_put_contents($nombreArchivoFormularioConsultas, $arrayComoJSON);

header("Location: ../index.php?s=gracias");
