<?php
declare(strict_types=1);

class KeamananSystem
{
    public function __call(string $name, array $arguments): mixed
    {
        if ($name === 'aksesRahasia') {
            $argStr = implode(', ', $arguments);
            return "Akses diterima untuk method '$name' dengan argumen: [$argStr]";
        }

        throw new Exception("Error: Method '$name' tidak diizinkan atau tidak terdaftar!");
    }
}

$uji = new KeamananSystem();

try {
    echo $uji->aksesRahasia("Data Top Secret PBO") . "<br>";
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

try {
    echo $uji->hapusDatabaseSemua();
} catch (Exception $e) {
    echo "<span style='color:red'>" . $e->getMessage() . "</span>";
}