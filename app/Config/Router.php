<?php
// app/config/Router.php

namespace App\Config;

class Router {
    protected $url;
    protected const METODO_PADRAO = 'index';
    protected const CONTROLADOR_PADRAO = 'TesteValidacao';

    public function __construct($url) {
        $this->url = $url;
    }

    public function direcionarRotas(): void {
        $partesUrl = explode('/', $this->url);
        $nomeDoControlador = ucfirst(!empty($partesUrl[1] ?? '') ? $partesUrl[1] : self::CONTROLADOR_PADRAO);
        $nomeDoMetodo = $partesUrl[2] ?? self::METODO_PADRAO; 
        $parametros = array_slice($partesUrl, 3);

        $caminhoControlador = "app/Controller/{$nomeDoControlador}.php";
        if (file_exists($caminhoControlador)) {
            require $caminhoControlador;
            $controllerClass = "App\\Controller\\{$nomeDoControlador}";
            if (class_exists($controllerClass)) {
                $controlador = new $controllerClass;
                if (method_exists($controlador, $nomeDoMetodo)) {
                    try {
                        call_user_func_array([$controlador, $nomeDoMetodo], $parametros);
                    } catch (\Exception $e) {
                        echo "Ocorreu um erro: " . $e->getMessage();
                    }
                } else {
                    echo "Método não encontrado.";
                }
            } else {
                echo "Classe do controlador não encontrada.";
            }
        } else {
            echo "Arquivo do controlador não encontrado.";
        }
    }
}
