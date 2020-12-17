<?php

use app\core\Application;
use app\core\Database;

class m00002_add_password_to_users
{
    private Database $db;
    public function __construct()
    {
        $this->db = Application::$app->db;
    }

    public function up()
    {
        $SQL = "ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL";
        $this->db->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "ALTER TABLE users DROP COLUMN password";
        $this->db->pdo->exec($SQL);
    }
}