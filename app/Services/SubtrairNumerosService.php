<?php

namespace App\Services;

class SubtrairNumerosService
{
    /**
     * Realiza a subtraзгo de dois nъmeros
     *
     * @param float|int $numero1
     * @param float|int $numero2
     * @return float|int
     */
    public function subtrair($numero1, $numero2)
    {
        return $numero1 - $numero2;
    }
}
