<?php

namespace Strategy;

class StrategySort implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);
        return $data;
    }
}