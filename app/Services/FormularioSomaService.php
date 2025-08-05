<?php

namespace App\Services;

use Illuminate\Contracts\View\View;

class FormularioSomaService
{
    /**
     * Retorna a view do formul�rio de soma
     *
     * @return View
     */
    public function getFormularioSoma(): View
    {
        return view('somar');
    }
}
