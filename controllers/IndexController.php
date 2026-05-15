<?php

namespace Controllers;

use MVC\Router;

class IndexController {
    public static function index(Router $router) {

        $alertas = [];

        
        // Render a la vista 
        $router->render('index/index', [
            'titulo' => 'Bienvenidos',
            'alertas' => $alertas
        ]);
    }

    public static function nuestraHistoria(Router $router) {

        $alertas = [];

        
        // Render a la vista 
        $router->render('index/nuestra-historia', [
            'titulo' => 'Nuestra Historia',
            'alertas' => $alertas
        ]);
    }

    public static function laBoda(Router $router) {

        $alertas = [];

        
        // Render a la vista 
        $router->render('index/la-boda', [
            'titulo' => 'La Boda',
            'alertas' => $alertas
        ]);
    }
    public static function rsvp(Router $router) {

        $alertas = [];

        
        // Render a la vista 
        $router->render('index/rsvp', [
            'titulo' => 'RSVP',
            'alertas' => $alertas
        ]);
    }

    public static function planeaTuVisita(Router $router) {

        $alertas = [];

        
        // Render a la vista 
        $router->render('index/planea-tu-visita', [
            'titulo' => 'Planea tu Visita',
            'alertas' => $alertas
        ]);
    }
}