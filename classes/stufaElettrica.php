<?php 
class StufaElettrica extends Riscaldamento
{
    public function __construct()
    {
        $this->costoInstallazione = 1400;
        $this->rendimento = 1;
        $this->costoAnnuale = 0.276;
        $this->materiaPrima = "Corrente";
    }

    public function CalcolaUtilizzo($cons)
    {
        $this->utilizzo = $cons / (10.7 * $this->rendimento);
    }

    public function ToString()
    {
        return "stufa elettrica";
    }

}
?>