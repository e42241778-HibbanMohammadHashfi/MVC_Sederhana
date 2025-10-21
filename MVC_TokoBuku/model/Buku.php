<?php
class Buku {
    private $dataBuku = [
        ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
        ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya Ananta Toer", "tahun" => 1980],
        ["judul" => "Negeri 5 Menara", "pengarang" => "Ahmad Fuadi", "tahun" => 2009],
        ["judul" => "Dilan 1990", "pengarang" => "Pidi Baiq", "tahun" => 2014],
    ];

    public function getAllBuku() {
        return $this->dataBuku;
    }
}
?>
