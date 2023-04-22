<?php
require_once dirname(__FILE__)."\intRiscaldamento.php";

class intCaldaiaCondensazione extends intRiscaldamento{
    private $CaldaiaCondensazione;
    public function __construct(CaldaiaCondensazione $CaldaiaCondensazione)
    {
        $this->CaldaiaCondensazione=$CaldaiaCondensazione;
    }

    public function intCalcolaUtilizzo($cons)
    {
        $this->CaldaiaCondensazione->CalcolaUtilizzo($cons);
    }

    public function intToString()
    {
        return $this->CaldaiaCondensazione->ToString();
    }



    public function intSetConsumi($consumo)
    {
        $this->CaldaiaCondensazione->SetConsumi($consumo);
    }

    public function intCalcolaTotale()
    {
        return $this->CaldaiaCondensazione->CalcolaTotale();
    }

    public function intGetTotale()
    {
        return $this->CaldaiaCondensazione->GetTotale();
    }

    public function intGetMateriaPrima()
    {
        return $this->CaldaiaCondensazione->GetMateriaPrima();
    }
    
    public function intGetCostoInstallazione()
    {
        return $this->CaldaiaCondensazione->GetCostoInstallazione();
    }

    public function intGetObj()
    {
        return $this->CaldaiaCondensazione;
    }

}
?>