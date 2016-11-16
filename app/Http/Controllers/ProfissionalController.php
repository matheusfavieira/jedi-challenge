<?php

namespace App\Http\Controllers;

use App\Repositories\Profissional\IProfissionalRepo;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    public function index(Request $request, IProfissionalRepo $profissionalRepo)
    {
        $listaUsuarios = [];

        if (!empty($request->all())) {
            $listaUsuarios = $profissionalRepo->obterProfissionaisPorCidadeEOuLinguagem($request->input('location'), $request->input('language'));
        }

        return response()->json($listaUsuarios);
    }
}
