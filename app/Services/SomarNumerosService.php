<?php

namespace App\Services;

class SomarNumerosService
{
    /**
     * Realiza a soma de dois números
     *
     * @param float|int $numero1
     * @param float|int $numero2
     * @return float|int
     */
    public function somar($numero1, $numero2)
    {
        return $numero1 + $numero2;
    }
}
