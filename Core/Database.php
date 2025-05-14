<?php

namespace Core;

use PDO;
use PDOStatement;

class Database
{
    private PDO $connector;

    private static ?self $instance = null;

    private PDOStatement|bool $statment;

    private function __construct($config, $user = 'root', $password = null)
    {
        $this->connector = new PDO('mysql:'.http_build_query($config, '', ';'));

        $this->connector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connector->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            $config = include base_path('config/app.php');
            self::$instance = new self($config['database']);
        }

        return self::$instance;
    }

    public function query($query, $param = []): self
    {
        $this->statment = $this->connector->prepare($query);
        $this->statment->execute($param);

        return $this;
    }

    public function find(): array
    {
        return $this->statment->fetch(PDO::FETCH_ASSOC);
    }

    public function findALl(): array
    {
        return $this->statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get(int $id, string $tableName, string $pkName): array
    {
        $sql = "SELECT * FROM $tableName WHERE $pkName=:id";

        return $this->query($sql, ['id' => $id])
            ->findOrFail();
    }

    public function findOrFail(): array
    {
        $result = $this->statment->fetch(PDO::FETCH_ASSOC);

        if (! $result) {
            abort(404, 'Enregristrement innexistant');
            exit();
        }

        return $result;
    }

    public function execute($query, $param = []): bool
    {
        $statment = $this->connector->prepare($query);

        return $statment->execute($param);
    }
}
