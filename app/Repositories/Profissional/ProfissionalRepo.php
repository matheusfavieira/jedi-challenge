<?php

namespace App\Repositories\Profissional;

use App\Models\Profissional;
use App\Repositories\GithubRepo;

class ProfissionalRepo extends GithubRepo implements IProfissionalRepo
{
    public function obterProfissionaisPorCidadeEOuLinguagem($cidade = null, $linguagem = null)
    {
        $filtros = $this->getFiltrosBuscaProfissionais(['location' => $cidade, 'language' => $linguagem]);
        $retorno = $this->get(GithubRepo::URL_BUSCA_USUARIOS_GITHUB_API, $filtros);
        $listaProfissionais = $this->tratarRetornoBuscaProfissionais($retorno);
        return $listaProfissionais;
    }

    private function tratarRetornoBuscaProfissionais($retorno)
    {
        $listaProfissionais = collect($retorno->items)->map(function ($item) {
            return $this->getProfissional($item);
        })->values()->all();
        return $listaProfissionais;
    }

    private function getProfissional($value)
    {
        $profissional = new Profissional();
        $profissional->login = $value->login;
        $profissional->foto = $value->avatar_url;
        $profissional->classificacao = $this->getClassificacaoTratada($value->score);
        return $profissional;
    }

    private function getClassificacaoTratada($nota)
    {
        return $nota >= 3.5 ? 'cavaleiro jedi' : 'aprendiz jedi';
    }
}
