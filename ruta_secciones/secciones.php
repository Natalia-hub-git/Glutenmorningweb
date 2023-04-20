<?php
/**
 *Retorna un array con la lsta de secciones.
 * Además le agrega el title a cada seccion.
 */

function getSeccionesListaNav(){
    return [
        'home' => [
            'title' =>  'Gluten Morning Market',
        ],
        'productos' => [
            'title' =>   'Los mejores productos sin gluten',
        ],
        'producto_detalle' =>[
            'title' =>  'Detalle de producto',
        ],
        'consultas' =>[
            'title' =>  'Dejanos tu consulta y te responderemos a la brevedad',
        ],
        'gracias' =>[
            'title' =>  'Gracias por escribirnos',
        ],
    ];
}