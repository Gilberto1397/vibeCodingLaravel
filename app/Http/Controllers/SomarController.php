<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FormularioSomaService;
use App\Services\SomarNumerosService;

class SomarController extends Controller
{
    /**
     * Exibe o formulário da calculadora
     *
     * @param FormularioSomaService $somarService
     * @return \Illuminate\Contracts\View\View
     */
    public function index(FormularioSomaService $somarService)
    {
        return $somarService->getFormularioSoma();
    }

    /**
     * Processa a soma dos números
     *
     * @param Request $request
     * @param SomarNumerosService $somarNumerosService
     * @return \Illuminate\Contracts\View\View
     */
    public function somar(Request $request, SomarNumerosService $somarNumerosService)
    {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $resultado = $somarNumerosService->somar($numero1, $numero2);

        return view('somar', compact('numero1', 'numero2', 'resultado'));
    }
}
