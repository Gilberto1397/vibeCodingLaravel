<?php

namespace App\Services;

use Illuminate\Contracts\View\View;

class FormularioSubService
{
    /**
     * Retorna a view do formulário de subtração
     *
     * @return View
     */
    public function exibirFormulario(): View
    {
        return view('subtrair');
    }
}
