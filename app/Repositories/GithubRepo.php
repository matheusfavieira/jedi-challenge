<?php

namespace App\Repositories;

use GuzzleHttp\Client;

abstract class GithubRepo
{
    const URL_BASE_GITHUB_API = 'https://api.github.com/';
    const URL_BUSCA_USUARIOS_GITHUB_API = 'search/users';

    protected function get($url, $parametros = [], $baseUri = null)
    {
        $baseUri = empty($baseUri) ? GithubRepo::URL_BASE_GITHUB_API : $baseUri;
        $client = new Client(['base_uri' => $baseUri]);
        $response = null;

        try {
            $response = $client->get($url, ['query' => $parametros]);
        } catch (\Exception $e) {
            return;
        }

        return json_decode($response->getBody());
    }

    protected function getFiltrosBuscaProfissionais($filtros)
    {
        $q = ['type:user'];

        if (array_has($filtros, 'location')) {
            $q[] = sprintf('location:"%s"', $filtros['location']);
        }

        if (array_has($filtros, 'language')) {
            $q[] = sprintf('language:"%s"', $filtros['language']);
        }

        return [
            'q' => implode(' ', $q),
        ];
    }
}
