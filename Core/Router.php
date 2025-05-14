<?php

namespace Core;

use AltoRouter;

class Router
{
    private array $params = [];

    private static ?self $instance = null;

    private ?AltoRouter $alto = null;

    private function __construct()
    {
        $this->alto = new AltoRouter;
    }

    public static function getInstance(): self
    {
        if (! self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function start(): string
    {
        $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
        $match = $this->alto->match(null, $method);
        // dump($method, $match);

        if (! $match) {
            abort();
        }

        $this->params = $match['params'];

        return base_path('controller/'.$match['target']);
    }

    public function get(string $url, string $ctrl, ?string $name = null): void
    {
        $this->addRoute($url, $ctrl, 'GET', $name);
    }

    public function post(string $url, string $ctrl, ?string $name = null): void
    {
        $this->addRoute($url, $ctrl, 'POST', $name);
    }

    public function put(string $url, string $ctrl, ?string $name = null): void
    {
        $this->addRoute($url, $ctrl, 'PUT', $name);
    }

    public function patch(string $url, string $ctrl, ?string $name = null): void
    {
        $this->addRoute($url, $ctrl, 'PATCH', $name);
    }

    public function delete(string $url, string $ctrl, ?string $name = null): void
    {
        $this->addRoute($url, $ctrl, 'DELETE', $name);
    }

    private function addRoute(string $url, string $ctrl, string $method, ?string $name = null): void
    {
        $this->alto->map($method, $url, $ctrl, $name);
    }

    public function params(): array
    {
        return $this->params;
    }

    public function generate(string $routeName, array $params = []): string
    {
        return $this->alto->generate($routeName, $params);
    }
}
