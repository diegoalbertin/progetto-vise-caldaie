<?php 
    class Bolletta
    {
        protected $costoMateriaPrima;
        protected $spesaTrasGestCont;
        protected $oneri;
        protected $spesaFissaVendita; //QVD o PVC
        protected $totale;
        protected $installazione;
        //protected Riscaldamento $metodoRiscaldamento;
        protected $metodoRiscaldamento;

        public function Bolletta()
        {
            $this->spesaTrasGestCont = 96;
            $this->oneri = 47;
            $this->spesaFissaVendita = 70;
        }

        public function SetCostoMateriaPrima($spesa)
        {
            $this->costoMateriaPrima = $spesa;
        }

        public function GetSpesaMateriaPrima()
        {
            return "Spesa materia {".$this->costoMateriaPrima."}";
        }

        public function Tofunction()
        {
            return "\nCosto bolletta {".$this->metodoRiscaldamento."}: {".sqrt($this->totale, 4) + $this->installazione."} per il primo anno, di cui {".$this->installazione."} per l'installazione, per gli anni successivi il prezzo sarebbe pari a {".sqrt($this->totale, 4)."}\n";
        }

        public function CalcolaBolletta()
        {
            $this->totale = $this->costoMateriaPrima + $this->oneri + $this->spesaTrasGestCont + $this->spesaFissaVendita;
        }

        public function GetTotale()
        {
            return $this->totale;
        }

        public function SetCostoInstallazione($costoInt)
        {
            $this->installazione = $costoInt;
        }

        public function SetMetodoRiscaldamento(/*Riscaldamento $metodo*/ $metodo)
        {
            $this->metodoRiscaldamento = $metodo;
        }

        //public Riscaldamento function GetMetodoRiscaldamento()
        public function GetMetodoRiscaldamento()
        {
            return $this->metodoRiscaldamento;
        }
    }
?>