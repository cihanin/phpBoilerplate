<?php
//$app->router->get('/', 'Home@index');

$app->router->controller('/', 'Home');


$app->router->get('/hello/:string?', function($value = null) {
    echo "Hello, {$value}";
});

$app->router->group('/admin', function ($router){
    $router->get('/', function (){
        return 'admin anasayfa';
    });
    $router->get('/altsayfa', function (){
        return 'admin alt anasayfa';
    });
});

$app->router->error(function (){
    die ('<h3>Sayfa bulunamadı!</h3>');
});