<?php

namespace App\Database;

use PDO;
use PDOException;

readonly class Database
{
    private PDO $pdo;

    public function __construct(
        public string $host,
        public string $database,
        public string $username,
        public string $password
    ) {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8";

            $this->pdo = new PDO(
                dsn: $dsn,
                username: $this->username,
                password: $this->password
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro na conexão: {$e->getMessage()}";
            exit;
        }
    }

    public function connection(): PDO
    {
        return $this->pdo;
    }
}
