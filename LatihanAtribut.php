<?php
declare(strict_types=1);

class Latihan
{
    private array $data = [];

    public function __set(string $name, mixed $value): void
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name): mixed
    {
        return $this->data[$name] ?? "Atribut '$name' tidak ditemukan.";
    }

    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    public function __unset(string $name): void
    {
        unset($this->data[$name]);
    }
}

$obj = new Latihan();

$obj->hobi = "Main Gitar & Coding";
echo "Hobi: " . $obj->hobi . "<br>";

var_dump(isset($obj->hobi));
echo "<br>";

unset($obj->hobi);
var_dump(isset($obj->hobi));