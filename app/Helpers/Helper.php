<?php
namespace App\Helpers;

class Helper
{
    public static function returnAjax(bool $status, mixed $menssagem): void {
        echo '{"status": " '. $status . '", "menssagem": "' . $menssagem . '"}';
        exit;
    }
}