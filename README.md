# Testes Unitários com PHPUnit

Este repositório contém uma atividade prática de testes unitários utilizando o framework **PHPUnit**, como parte do conteúdo da disciplina de programação em PHP.

## 📁 Estrutura do Projeto

```
testes-aula/
├── src/
│   └── Funcoes.php            # Funções a serem testadas
├── tests/
│   └── FuncoesTest.php        # Testes automatizados com PHPUnit
└── composer.json              # Configuração do projeto
```

## ✅ Funcionalidades testadas

- `isEven($n)` — Verifica se um número é par
- `factorial($n)` — Calcula o fatorial (com exceção para valores negativos)
- `isPalindrome($str)` — Verifica se uma string é palíndroma
- `fahrenheitToCelsius($f)` — Converte Fahrenheit para Celsius
- `calculateDiscount($price, $percent)` — Aplica desconto percentual (com validações)

## 🚀 Como executar os testes

1. Instale as dependências com o Composer:

```bash
composer install
```

2. Execute os testes com o PHPUnit:

```bash
./vendor/bin/phpunit tests
```

## 📌 Requisitos

- PHP 7.4 ou superior
- [Composer](https://getcomposer.org/) instalado

## 📄 Objetivo da atividade

- Praticar a escrita de testes automatizados
- Identificar comportamentos esperados e falhas
- Compreender como os testes aumentam a segurança do código ao evoluí-lo
