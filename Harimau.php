<?php
     class Harimau
     {
         use Hewan, Fight;
         
         function __construct() {
            $this->setJumlahKaki(4); 
            $this->setKeahlian('Lari Cepat'); 
            $this->setAttackPower(7); 
            $this->setDefencePower(8);
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