<?php

class intStufaElettrica extends intRiscaldamento{
    private $stufaElettrica;
    public function __construct(StufaElettrica $stufa)
    {
        $this->stufaElettrica=$stufa;
    }

    public function intCalcolaUtilizzo($cons)
    {
        $this->stufaElettrica->CalcolaUtilizzo($cons);
    }

    public function intToString()
    {
        return $this->stufaElettrica->ToString();
    }



    public function intSetConsumi($consumo)
    {
        $this->stufaElettrica->SetConsumi($consumo);
    }

    public function intCalcolaTotale()
    {
        return $this->stufaElettrica->CalcolaTotale();
    }

    public function intGetTotale()
    {
        return $this->stufaElettrica->GetTotale();
    }

    public function intGetMateriaPrima()
    {
        return $this->stufaElettrica->GetMateriaPrima();
    }
    
    public function intGetCostoInstallazione()
    {
        return $this->stufaElettrica->GetCostoInstallazione();
    }
    
    public function intGetObj()
    {
        return $this->stufaElettrica;
    }

    
}
?>