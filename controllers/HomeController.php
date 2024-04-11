<?php
 namespace Controllers;
 use MVC\Router;

 class HomeController{
    public static function inicio(Router $router){
        $router->render('home/index');
    }
    public static function contacto(Router $router){
        $router->render('home/contact');
    }
    public static function informacion(Router $router){
        $router->render('home/features');
    }
    public static function servicios(Router $router){
        $router->render('home/services');
    }
    public static function modelos(Router $router){
        $router->render('home/modelos');
    }
    
 }