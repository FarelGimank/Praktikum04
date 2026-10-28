<?php
declare(strict_types=1);

class Buku
{
    public function __construct(
        public string $judul = "",
        public string $penulis = "",
        public int $tahun = 0
    ) {}

    public function tampilInfo(): string
    {
        return "Buku: \"{$this->judul}\" karya {$this->penulis} ({$this->tahun})";
    }
}

$buku1 = new Buku("Belajar PHP Dasar", "Andi Pratama", 2022);
$buku2 = new Buku("Pemrograman Berorientasi Objek", "Budi Santoso", 2023);
$buku3 = new Buku("Struktur Data dan Algoritma", "Citra Lestari", 2021);

echo $buku1->tampilInfo() . "<br>";
echo $buku2->tampilInfo() . "<br>";
echo $buku3->tampilInfo() . "<br>";