<?php 
require_once dirname(__DIR__)."\classes\Riscaldamento.php";

class intRiscaldamento
{
        private $Riscaldamento;
        public function __construct(Riscaldamento $risc)
        { 
            $this->Riscaldamento=$risc;
        }

        public function intCalcolaUtilizzo($cons)
        {
        }

        public function intSetConsumi($consumo)
        {
            $this->Riscaldamento->SetConsumi($consumo);
        }

        public function intToString()
        {
            return $this->Riscaldamento->ToString();
        }

        public function intCalcolaTotale()
        {
            return $this->Riscaldamento->CalcolaTotale();
        }
        public function intGetTotale()
        {
            return $this->Riscaldamento->GetTotale();
        }

        public function intGetMateriaPrima()
        {
            return $this->Riscaldamento->GetMateriaPrima();
        }
        public function intGetCostoInstallazione()
        {
            return $this->Riscaldamento->GetCostoInstallazione();
        }
    }
?>