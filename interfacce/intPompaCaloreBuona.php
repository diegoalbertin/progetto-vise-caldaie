<?php

class intPompaCaloreBuona extends intRiscaldamento{
    private $PompaCaloreBuona;
    public function __construct(PompaCaloreBuona $PompaCaloreBuona)
    {
        $this->PompaCaloreBuona=$PompaCaloreBuona;
    }

    public function intCalcolaUtilizzo($cons)
    {
        $this->PompaCaloreBuona->CalcolaUtilizzo($cons);
    }

    public function intToString()
    {
        return $this->PompaCaloreBuona->ToString();
    }
    


    public function intSetConsumi($consumo)
    {
        $this->PompaCaloreBuona->SetConsumi($consumo);
    }

    public function intCalcolaTotale()
    {
        return $this->PompaCaloreBuona->CalcolaTotale();
    }

    public function intGetTotale()
    {
        return $this->PompaCaloreBuona->GetTotale();
    }

    public function intGetMateriaPrima()
    {
        return $this->PompaCaloreBuona->GetMateriaPrima();
    }

    public function intGetCostoInstallazione()
    {
        return $this->PompaCaloreBuona->GetCostoInstallazione();
    }

    public function intGetObj()
    {
        return $this->PompaCaloreBuona;
    }
}
?>