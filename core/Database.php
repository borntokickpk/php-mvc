<?php

namespace app\core;

use PDO;

class Database
{
    public PDO $pdo;

    public function __construct(array $config)
    {
        $dsn = $config["dsn"] ?? '';
        $username = $config["user"] ?? '';
        $passwd = $config["password"] ?? '';
        
        $this->pdo = new PDO($dsn, $username, $passwd);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}