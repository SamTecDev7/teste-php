<?php
namespace App\Config;

class View
{
    private const CAMINHO_VIEWS = 'app/View/';
    private const EXTENSAO_VIEWS = '.php';
    
    public function __construct() {
        
    }

    public static function load(string $nomeView): void {
        $arquivoView = self::retornaCaminhoDaView($nomeView);
        if (file_exists($arquivoView)) {
            echo file_get_contents($arquivoView);
        }
    }

    public static function retornaCaminhoDaView(string $nomeView): string {
        return self::CAMINHO_VIEWS . $nomeView . self::EXTENSAO_VIEWS;
    }
}