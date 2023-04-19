<?php

class intCaldaiaTradizionale{
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
}
?>