<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class GaleriaController extends BaseController
{
    

    private $obras = [ [
        'id' => 1,
        'titulo' => 'La noche estrellada',
        'artista' => 'Vincent van Gogh',
        'descripcion' => 'Una de las obras más conocidas de Van Gogh, que muestra una vista nocturna
        con un cielo lleno de remolinos.',
        'imagen' => 'images/noche-estrellada.jpg',
        ], [
        'id' => 2,
        'titulo' => 'El grito',
        'artista' => 'Edvard Munch',
        'descripcion' => 'Representa la ansiedad existencial y es una de las piezas más icónicas del arte
        moderno.',
        'imagen' => 'images/el-grito.jpg',
        ], [
        'id' => 3,
        'titulo' => 'La persistencia de la memoria',
        'artista' => 'Salvador Dalí',
        'descripcion' => 'Una pintura surrealista que muestra relojes derritiéndose en un paisaje desértico.',
        'imagen' => 'images/persistencia-memoria.webp',
        ], [
        'id' => 4,
        'titulo' => 'El beso',
        'artista' => 'Gustav Klimt',
        'descripcion' => 'Una obra icónica del arte modernista que representa una pareja abrazándose
        en un campo lleno de patrones dorados.',
        'imagen' => 'images/el-beso.jpg'
        ], [
        'id' => 5,
        'titulo' => 'Las Meninas',
        'artista' => 'Diego Velázquez',
        'descripcion' => 'Una compleja composición que muestra a la infanta Margarita rodeada de sus
        sirvientes y al propio pintor.',
        'imagen' => 'images/las-meninas.jpg'
        ], [
        'id' => 6,
        'titulo' => 'La Gioconda (Mona Lisa)',
        'artista' => 'Leonardo da Vinci',
        'descripcion' => 'Un retrato enigmático que ha capturado la imaginación del mundo por su
        expresión y técnica.',
        'imagen' => 'images/mona-lisa.jpg'
        ], [
        'id' => 7,
        'titulo' => 'La ronda de noche',
        'artista' => 'Rembrandt',
        'descripcion' => 'Una vibrante escena nocturna que muestra a una milicia de guardia civil en
        acción.',
        'imagen' => 'images/ronda-noche.jpg'
        ], [
        'id' => 8,
        'titulo' => 'Impresión, sol naciente',
        'artista' => 'Claude Monet',
        'descripcion' => 'La obra que dio nombre al impresionismo, mostrando un amanecer en el puerto de
        Le Havre.',
        'imagen' => 'images/impresion-sol.jpg'
        ], [
        'id' => 9,
        'titulo' => 'Guernica',
        'artista' => 'Pablo Picasso',
        'descripcion' => 'Un poderoso mural que denuncia los horrores de la guerra y la destrucción de
        Guernica.',
        'imagen' => 'images/guernica.jpg' ],
        ];



function index(){

return view('galeria.index', ['obras' => $this->obras]); 
}

function show($id){

    foreach($this->obras as $obra){
            
        if($id == $obra['id']){
            return view('galeria.show', ['obra' => $obra]);
        } 
    }

    return "Lo siento, obra no encontrada en nuestra galería";

}



    
}