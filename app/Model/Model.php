<?php
namespace App\model;
use \App\Config\Database;

class Model extends Database 
{
    public function __construct() {
        parent::__construct();
    }
}