<?php 

    trait Hewan
    {
        private $nama, $darah = 50, $jumlahKaki, $keahlian;

        public function setNama(String $nama) {
            $this->nama = $nama;
        }

        public function getNama() {
            return $this->nama;
        }

        public function setDarah($darah) {
            $this->darah = $darah;
        }

        public function getDarah() {
            return $this->darah;
        }

        public function setJumlahKaki($jumlahKaki) {
            $this->jumlahKaki = $jumlahKaki;
        }
        
        public function getJumlahKaki() {
            return $this->jumlahKaki;
        }
        
        public function setKeahlian(String $keahlian) {
            $this->keahlian = $keahlian;
        }
        
        public function getKeahlian() {
            return $this->keahlian;
        }

        public function Atraksi() {
            return $this->getNama() .' sedang '. $this->getKeahlian() . '<br>';
        }
        
    }
?>