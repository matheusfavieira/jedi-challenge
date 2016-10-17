# jedi-challenge
Do or do not, there is no try!

##Instruções

**1.** Crie um **fork** deste projeto.

**2.** Desenvolva os requesitos descritos abaixo.

**3.** Depois de concluir, faça um **pull request** contendo tudo que você desenvolveu, informando seu e-mail na descrição do Pull Request.

**4.** Você **deve** utilizar [Spring REST](https://spring.io/guides/gs/rest-service/) para expor seu end-point. 

Dica: o Framework [JHipster](jhipster.github.io) pode te ajudar a dar um rápido bootstrap da aplicação REST usando o Spring. 

==============

###Introdução

Seu código será avaliado principalmente nos seguintes aspectos:

**1.** Conhecimento em aspectos de SOA e boas práticas em aplicações REST.

**2.** Capacidade de construção de classes coesas e métodos não complexos.

**3.** Qualidade do código em geral.

**4.** Funcionamento do código (óbvio).

Levamos muito a sério nesse teste a garantia de que tudo esteja funcionando corretamente. Nada de end-points incorretos sendo consumidos nem binds com atributos incorretos hein :)

==============

A Vulpi está reescrevendo seu sistema de buscas no Github e deseja consumir a nova versão da [Github API 3.0](https://developer.github.com/v3/search/#search-users) \o/.

Para isso, precisamos de um sistema implemente a história abaixo.

###História

Eu como desenvolvedor, quero poder fazer uma requisição **GET** à um end-point como:

`http://191.235.88.42/vulpi-api/professional?language=java&location=Belo+Horizonte`

para obter um *json* com uma lista de desenvolvedores encontrados no Github. 

Dessa forma, poderei obter as seguintes informações sobre cada um dos desenvolvedores encontrados: **login**, **foto** e **classificação**. O Campo do json **classificação** deve respeitar algumas regras descritas abaixo.

Caso a pontuação dada pelo Github ao desenvolvedor seja:
- **menor** do que 3.5, o campo "classificacao" será: aprendiz jedi.
- **maior ou igual** a 3.5, o campo "classificacao" será: cavaleiro jedi.

Para cumprir o desafio, use a [Github Search API](https://developer.github.com/v3/search/#search-users)
