<?php 
    class Elang
    {
        use Hewan, Fight;
        
        function __construct() {
            $this->setJumlahKaki(2); 
            $this->setKeahlian('Terbang Tinggi'); 
            $this->setAttackPower(10); 
            $this->setDefencePower(5);
        }

        public function getInfoHewan() {
            echo '
                Nama : '.$this->getNama().'<br>
                Jenis Hewan : '. get_class() .'<br>
                Darah : '.$this->getDarah().'<br>
                Jumlah Kaki : '.$this->getJumlahKaki().'<br>
                Keahlian : '.$this->getKeahlian().'<br>
                Attack Power : '.$this->getAttackPower().'<br>
                Defence Power : '.$this->getDefencePower().'<br>
                -----------------------------------<br><br>
            ';
        }

    }
?>