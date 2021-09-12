<?php

namespace Strategy;

class StrategyRSort implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);
        return $data;
    }
}