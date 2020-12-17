<?php

use app\core\Application;
use app\core\Database;

class m00001_initial
{
    private Database $db;
    public function __construct()
    {
        $this->db = Application::$app->db;
    }
    public function up()
    {
        $SQL = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            firstname VARCHAR(255) NOT NULL,
            lastname VARCHAR(255) NOT NULL,
            status TINYINT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;";
        $this->db->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE users;";
        $this->db->pdo->exec($SQL);
    }
}