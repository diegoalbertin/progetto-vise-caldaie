<?php 
    class caldaiaCondensazione extends Riscaldamento
    {
        public function caldaiaCondensazione()
        {
            $this->costoInstallazione = 1375;
            $this->rendimento = 1;
            $this->costoAnnuale = 1.05;
            $this->materiaPrima = "Gas";
        }

        public function CalcolaUtilizzo($cons)
        {
            $this->utilizzo = $cons / (10.7 * $this->rendimento);
        }

        public function ToString()
        {
            return "Caldaia a Condensazione";
        }
    }
?>