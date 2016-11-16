<?php

namespace App\Repositories\Profissional;

interface IProfissionalRepo
{
    /*
     * Método que me retorna uma lista de profissionais dada uma cidade e/ou linguagem
     * @return array Lista de profissionais
     */
    public function obterProfissionaisPorCidadeEOuLinguagem($cidade = null, $linguagem = null);
}
