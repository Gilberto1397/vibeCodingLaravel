<?php

namespace App\Services;

use Illuminate\Contracts\View\View;

class FormularioSubService
{
    /**
     * Retorna a view do formul�rio de subtra��o
     *
     * @return View
     */
    public function exibirFormulario(): View
    {
        return view('subtrair');
    }
}
