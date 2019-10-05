# Evolua Seu Código usando Tipos de Dados do PHP7

Descrição usada no PHPeste 2019:

```
## Evolua Seu Código usando Tipos de Dados do PHP7

Uma novidade do PHP7, tipagem de dados, traz novas possibilidades e também um pouco de polêmica. Mas o que é código "tipado"? O quê isso muda? Por quê isso é tão importante? E como usar isso para tornar meu código melhor? Vamos aprender esse novo conceito para evoluir nossa forma de escrever código em PHP.

**Objetivo**: explicar e apresentar as vantagens que as pessoas terão ao adotar tipagem estrita no seu código PHP. Muita gente não tem experiência com linguagens tipadas e nesta talk quero apresentar o conceito em si, explicar o que isso traz de novo no PHP e trazer dicas de como usar isso em benefício do seu projeto.
```

## Tópicos

- Título
  - [X] Slide de abertura
- Introdução
  - [X] Apresentação
- Desenvolvimento
  - [X] Nivelando
    - [X] O que são tipos?
      - Formas de representação de dados e suas possibilidades/características
    - [X] O que é uma linguagem tipada?
      - Em essência
        - Uma linguagem fortemente tipada exige que a declaração dos tipos seja seguida
        - Uma linguagem fracamente tipada faz a coerção dos tipos para você, absorvendo essa preocupação
  - [X] Caso do PHP
    - Quando isso começou?
      - PHP 5.0 para objetos
      - PHP 5.1 para arrays
      - PHP 5.4 para callable
      - PHP 7.0 para tipos escalares
  - [X] Como usar?
    - Exemplo 1: seguindo o uso estrito
    - Exemplo 2: violando o uso estrito
  - [ ] Vantagens
    - Torna o código mais explícito
    - Garantia do tipo dos dados, sem necessidade de conversões ao receber o input
    - Compatível com a flexibilidade do PHP - você usa se quiser
    - Não quebra compatibilidade com outras bibliotecas 
    - [ ] Compilação mais rápida?
    - [ ] Execução mais rápida?
    - [ ] Mais confiança por manter contratos?
    - [ ] "Linter" funcionando antes de executar?
    - [ ] Ferramentas?
      - [ ] Quem já usa?
- Conclusões
  - [ ] Nem um, nem outro?
  - [ ] Vantagens incríveis?
  - [ ] Tenham curiosidade! Experimentem o que é novo!
    - Lembrar que pra quem só conhece o martelo, todo problema é um prego
  - [ ] E o futuro?
- [ ] Referências
  - https://en.wikipedia.org/wiki/Strong_and_weak_typing
  - https://wiki.php.net/rfc/return_types
  - https://wiki.php.net/rfc/scalar_type_hints
  - https://wiki.php.net/rfc/scalar_type_hints_v5
  - https://wiki.php.net/rfc/typed-properties
  - https://wiki.php.net/rfc/typed_properties_v2
  - https://www.php.net/manual/en/language.types.php
  - https://blog.ircmaxell.com/2015/02/scalar-types-and-php.html
  - https://blog.pascal-martin.fr/post/in-favor-of-rfc-scalar-type-hints/
- Fim
  - [ ] Link de feedback
  - [ ] Agradecimentos
  - [ ] Contatos

---

## Linha do Tempo

Ideia: montar uma árvore das ideias, mostrando quais tiveram referência e/ou base direta de quais, o status de cada uma (por cor?), qual versão foi implementada e qual momento estamos.

- NOT [Better type names for int64](https://wiki.php.net/rfc/better_type_names_for_int64) 2014-08-22, Under Discussion
- [Class-like Primitive Types](https://wiki.php.net/rfc/class-like_primitive_types) 2016-12-07, Draft
  - Propõe comportamentos de classes para tipos escalares nativos (boolean, integer, float, string, array e resource, null não é incluso).
- [Enable strict_types checking for curl_setopt()](https://wiki.php.net/rfc/curl_setopt_strict_types) 2017-04-21, Under Discussion
