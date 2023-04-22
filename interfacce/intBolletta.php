<?php
    class intBolletta{

        private $Bolletta;
        public function __construct(Bolletta $Bolletta)
        {
            $this->Bolletta=$Bolletta;
        }

        public function intSetCostoMateriaPrima($spesa)
        {
            $this->Bolletta->SetcostoMateriaPrima($spesa);
        }

        public function intGetSpesaMateriaPrima()
        {
            return $this->Bolletta->GetSpesaMateriaPrima();
        }

        public function intToString()
        {
            return $this->Bolletta->__toString();
        }

        public function intCalcolaBolletta()
        {
            $this->Bolletta->CalcolaBolletta();
        }

        public function intGetTotale()
        {
            return $this->Bolletta->GetTotale();
        }

        public function intSetCostoInstallazione($costoInt)
        {
            $this->Bolletta->SetCostoInstallazione($costoInt);
        }

        public function intSetMetodoRiscaldamento(Riscaldamento $metodo/*$metodo*/)
        {
            $this->Bolletta->SetMetodoRiscaldamento($metodo);
        }

        //public Riscaldamento function GetMetodoRiscaldamento()
        public function intGetMetodoRiscaldamento()
        {
            return $this->Bolletta->GetMetodoRiscaldamento();
        }
    }
?>