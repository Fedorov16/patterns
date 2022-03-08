<?php

declare(strict_types=1);

namespace App\Principle\Solid\SingleResponsibility\Entity;

use function dump;

class Zone
{
    private string $id;
    private string $name;
    
    private array $settings;

    private array $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    
    public function setSettings(array $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function save(): void
    {
        try {
            $pdo = new \PDO("sqlite:" . $this->config['dbPath']);
            $name = $this->name;
            $settings = http_build_query($this->settings);
            $pdo->query("INSERT INTO 'zones' SELECT ($name, $settings)")->execute();
        } catch (\Exception $exception) {
            $this->logToFile($exception);
        }
    }

    private function logToFile(\Exception $exception): void
    {
        dump($exception->getMessage());
    }
}
