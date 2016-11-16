<?php

namespace App\Models;

class Profissional extends Model
{
    /**
     * Login do profissional no github.
     *
     * @var string
     */
    public $login;

    /**
     * URL da foto do profissional no github.
     *
     * @var string
     */
    public $foto;

    /**
     * Classificação do profissional de acordo com a avaliação do github. ['cavaleiro jedi', 'aprendiz jedi']
     *
     * @var string
     */
    public $classificacao;
}
