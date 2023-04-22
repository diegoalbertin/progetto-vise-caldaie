<?php

class intCaldaiaTradizionale extends intRiscaldamento{ 
    private $CaldaiaTradizionale;
    public function __construct(CaldaiaTradizionale $CaldaiaTradizionale)
    {
        $this->CaldaiaTradizionale=$CaldaiaTradizionale;
    }

    public function intCalcolaUtilizzo($cons)
    {
        $this->CaldaiaTradizionale->CalcolaUtilizzo($cons);
    }

    public function intToString()
    {
        return $this->CaldaiaTradizionale->ToString();
    }
    

    public function intSetConsumi($consumo)
    {
        $this->CaldaiaTradizionale->SetConsumi($consumo);
    }

    public function intCalcolaTotale()
    {
        return $this->CaldaiaTradizionale->CalcolaTotale();
    }

    public function intGetTotale()
    {
        return $this->CaldaiaTradizionale->GetTotale();
    }

    public function intGetMateriaPrima()
    {
        return $this->CaldaiaTradizionale->GetMateriaPrima();
    }

    public function intGetCostoInstallazione()
    {
        return $this->CaldaiaTradizionale->GetCostoInstallazione();
    }

    public function intGetObj()
    {
        return $this->CaldaiaTradizionale;
    }
}
?>