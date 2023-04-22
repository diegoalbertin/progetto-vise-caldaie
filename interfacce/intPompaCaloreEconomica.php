<?php

class intPompaCaloreEconomica extends intRiscaldamento{
    
    private $PompaCaloreEconomica;
    public function __construct(PompaCaloreEconomica $PompaCaloreEconomica)
    {
        $this->PompaCaloreEconomica=$PompaCaloreEconomica;
    }

    public function intCalcolaUtilizzo($cons)
    {
        $this->PompaCaloreEconomica->CalcolaUtilizzo($cons);
    }

    public function intToString()
    {
        return $this->PompaCaloreEconomica->ToString();
    }

    public function intSetConsumi($consumo)
    {
        $this->PompaCaloreEconomica->SetConsumi($consumo);
    }

    public function intCalcolaTotale()
    {
        return $this->PompaCaloreEconomica->CalcolaTotale();
    }

    public function intGetTotale()
    {
        return $this->PompaCaloreEconomica->GetTotale();
    }

    public function intGetMateriaPrima()
    {
        return $this->PompaCaloreEconomica->GetMateriaPrima();
    }

    public function intGetCostoInstallazione()
    {
        return $this->PompaCaloreEconomica->GetCostoInstallazione();
    }

    public function intGetObj()
    {
        return $this->PompaCaloreEconomica;
    }
}
?>