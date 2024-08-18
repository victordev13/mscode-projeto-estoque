<?php

namespace App\Database;

class Query
{
    private \PDO $pdo;

    public function __construct()
    {
        $database = new Database(
            host: 'localhost',
            database: 'mscode',
            username: 'root',
            password: 'mscode2024'
        );

        $this->pdo = $database->connection();
    }

    public function select(string $tabela, string $condicao = null, string $colunas = '*'): false|array
    {
        try {
            $sql = "SELECT {$colunas} FROM {$tabela}";

            if($condicao !== null) {
                $sql .= " WHERE {$condicao}";
            }

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo "Erro na consulta: {$e->getMessage()}";

            return false;
        }
    }

    public function insert(string $tabela, array $dados): false|int
    {
    }

    public function update(string $tabela, array $dados, string $codicao): bool
    {
    }

    public function delete(string $tabela, string $codicao): bool
    {
    }
}
