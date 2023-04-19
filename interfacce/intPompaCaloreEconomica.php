<?php

class intPompaCaloreEconomica{
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
}
?>