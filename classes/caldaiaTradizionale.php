<?php 
class caldaiaTradizionale extends Riscaldamento
{
    public function caldaiaTradizionale()
    {
        $this->costoInstallazione = 1375;
        $this->rendimento = 0.9;
        $this->costoAnnuale = 1.05;
        $this->materiaPrima = "Gas";
    }

    public function CalcolaUtilizzo($cons)
    {
        $this->utilizzo = $cons / (10.7 * $this->rendimento);
    }

    public function ToString()
    {
        return "Caldaia Tradizionale";
    }
}
?>