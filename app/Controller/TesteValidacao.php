<?php
namespace App\Controller;
use App\Controller\Controller;
use App\Helpers\Helper;

class TesteValidacao extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index(): void {
        self::load('testeValidacao');
    }

    public function validarColchetes(string $colchetes): void {
        $boValidade = true;
        $menssagem = 'Sequência Válida!';
        $strColchetes = urldecode($colchetes);
    
        $listaDeSequenciasValidas = [];
        $mapaValidacao = [
            '(' => ')',
            '{' => '}',
            '[' => ']'
        ];
    
        for ($i = 0; $i < strlen($strColchetes); $i++) {
            $caractere = $strColchetes[$i];
            if (isset($mapaValidacao[$caractere])) {
                array_push($listaDeSequenciasValidas, $mapaValidacao[$caractere]);
            } else {
                if (empty($listaDeSequenciasValidas) || array_pop($listaDeSequenciasValidas) != $caractere) {
                    $boValidade = false;
                    $menssagem = 'A sequência de colchetes é inválida! ' . $strColchetes;
                    break;
                }
            }
        }
    
        // Aqui eu verifico se a pilha/listaDeSequenciasValidas esta vazia.
        if (!empty($listaDeSequenciasValidas)) {
            $boValidade = false;
            $menssagem = 'A sequência de colchetes é inválida! ' . $strColchetes;
        }
    
        Helper::returnAjax($boValidade, $menssagem);
    }
}