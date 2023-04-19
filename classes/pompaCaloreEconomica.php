<?php 
class PompaCaloreEconomica extends Riscaldamento
{
    public function PompaCaloreEconomica()
    {
        $this->costoInstallazione = 3000;
        $this->rendimento = 2.8;
        $this->costoAnnuale = 0.276;
        $this->materiaPrima = "Corrente";
    }

    public function CalcolaUtilizzo($cons)
    {
        $this->utilizzo = $cons / (10.7 * $this->rendimento);
    }

    public function ToString()
    {
        return "Pompa di calore economica";
    }

}
?>