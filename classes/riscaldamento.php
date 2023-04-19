<?php 
class Riscaldamento
    {
        protected $rendimento;
        protected $utilizzo;
        protected $costoAnnuale;
        protected $consumi;
        protected $costoTotale;
        protected $materiaPrima;
        protected $costoInstallazione;

        public function Riscaldamento()
        {
        }

        public function CalcolaUtilizzo($cons)
        {
        }

        public function SetConsumi($consumo)
        {
            $this->consumi = $consumo;
        }

        public function ToString()
        {
            $str = "Il rendimento del modello è: ".$this->rendimento.", il costo annuale è: ".$this->costoAnnuale." e i consumi sono: ".$this->consumi;
            return $str;
        }

        public function CalcolaTotale()
        {
            $this->costoTotale = $this->costoAnnuale * ($this->consumi + $this->utilizzo);
        }
        public function GetTotale()
        {
            return $this->costoTotale;
        }

        public function GetMateriaPrima()
        {
            return $this->materiaPrima;
        }
        public function GetCostoInstallazione()
        {
            return $this->costoInstallazione;
        }
    }
?>