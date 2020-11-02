<?php 

    trait Fight
    {
        private $attackPower, $defencePower;

        public function setAttackPower(Int $attackPower) {
            $this->attackPower = $attackPower;
        }

        public function getAttackPower() {
            return $this->attackPower;
        }

        public function setDefencePower(Int $defencePower) {
            $this->defencePower = $defencePower;
        }

        public function getDefencePower() {
            return $this->defencePower;
        }

        public function Serang($attacked) {
            echo $this->getNama() .' sedang menyerang '. $attacked->getNama() . '<br>';
        }

        public function Diserang($attacker) {
            echo $this->getNama() .' sedang diserang '. $attacker->getNama() . '<br>';
            $HP = $this->getDarah() - $attacker->getAttackPower() / $this->getDefencePower();
            $this->setDarah($HP);
        }

    }
?>