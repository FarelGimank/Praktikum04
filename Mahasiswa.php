<?php
declare(strict_types=1);

class Mahasiswa
{
    public function __construct(
        public string $nim = "",
        public string $nama = "",
        public string $fakultas = "Belum diisi",
        public string $prodi = "",
        public string $asalSekolah = "",
        public int $semester = 1,
        public string $hobi = "",
        public string $agama = "",
        public string $alamat = "",
        public string $hp = ""
    ) {}

    public function ringkasan(): string
    {
        return $this->nim . ' - ' . $this->nama . ' (Fakultas: ' . $this->fakultas . ')';
    }
}

$mhs1 = new Mahasiswa("2530521043", "Alfarel Fahrezi", "Teknik", "Informatika");
$mhs2 = new Mahasiswa("2530521099", "Abdul");

echo "<h3>Hasil Pengujian Constructor Mahasiswa:</h3>";
echo "Mahasiswa 1: " . $mhs1->ringkasan() . "<br>";
echo "Mahasiswa 2: " . $mhs2->ringkasan() . "<br>";