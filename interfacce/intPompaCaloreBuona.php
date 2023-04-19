<?php

class intPompaCaloreBuona{
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
}
?>