<?php

namespace app\core;

class Controller{
    protected function load(string $view, $params = []){
        $twig = new \Twig\Environment(
            new \Twig\Loader\filesystemLoader('../app/view/')
        );

        echo $twig->render($view . '.twig.php', $params);
    }
}