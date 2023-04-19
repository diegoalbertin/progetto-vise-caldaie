<?php

class intCaldaiaCondensazione{
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
}
?>