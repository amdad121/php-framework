<?php

namespace Amdadulhaq\PhpFramework;

use PDO;

class Model
{
    protected PDO $db;

    public function __construct() {
       $this->db = new PDO('mysql:host=' . DATABASE_HOST . ';dbname=' . DATABASE_NAME, DATABASE_USERNAME, DATABASE_PASSWORD);
    }
    
    public function query($sql): array
    {
        return $this->db->query($sql)->fetchAll();
    }
}