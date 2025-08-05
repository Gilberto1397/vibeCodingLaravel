<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FormularioSubService;
use App\Services\SubtrairNumerosService;

class SubtrairController extends Controller
{
    /**
     * Exibe o formul�rio da calculadora de subtra��o
     *
     * @param FormularioSubService $formularioSubService
     * @return \Illuminate\Contracts\View\View
     */
    public function exibirFormulario(FormularioSubService $formularioSubService)
    {
        return $formularioSubService->exibirFormulario();
    }

    /**
     * Processa a subtração dos números
     *
     * @param Request $request
     * @param SubtrairNumerosService $subtrairNumerosService
     * @return \Illuminate\Contracts\View\View
     */
    public function subtrair(Request $request, SubtrairNumerosService $subtrairNumerosService)
    {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $resultado = $subtrairNumerosService->subtrair($numero1, $numero2);

        return view('subtrair', compact('numero1', 'numero2', 'resultado'));
    }
}
