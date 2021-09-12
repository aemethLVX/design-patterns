<?php

namespace Strategy;

class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->setStrategy($strategy);
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomeBusinessLogic(): void
    {
        $result = $this->strategy->doAlgorithm(["a", "b", "c", "d", "e"]);
        echo implode(",", $result);
    }
}
