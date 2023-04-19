<?php

class intStufaElettrica{
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
}
?>