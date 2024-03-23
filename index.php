<?php

class Manusia {
    public $nama;
    public $umur;

    public function setnama($nama){
        $this->nama = $nama;
    }

    public function setumur($umur){
        $this->umur = $umur;
    }

    public function getinfo(){
        return "Nama : " . $this->nama . " , Umur : " . $this->umur;
    }

}

// Membuat objek nya

$nadia = new manusia();
$nadia->setnama("Nadia Putri Humairoh");
$nadia->setumur(19);

$ahmad = new manusia();
$ahmad->setnama("Ahmad Haikal");
$ahmad->setumur(22);

echo $nadia->getinfo();
echo "<br>";
echo $ahmad->getinfo();
