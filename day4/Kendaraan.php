<?php

class Kendaraan
{
    protected $jumlahRoda;
    public $warna;
    public $bahanBakar;
    public $harga;
    private $merek;

    public function __construct($x, $y) {
    $this->merek = $x;
    $this->harga = $y;
    }

    private function statusHarga() {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        }
        else {
            $status = 'Murah';
        }
        return $status;
    }

    public function setMerek($x) {
        $this->merek = $x;
    }

    public function setHarga($x) {
        $this->harga = $x;
    }

    public function bacaMerek() {
    return $this->merek;
    }

    public function bacaHarga() {
    return $this->harga;
    }

}
