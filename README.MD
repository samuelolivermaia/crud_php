# Documentação do Projeto PHP CRUD

## Visão Geral

Este projeto é um CRUD básico em PHP puro que permite criar, ler, atualizar e excluir registros de usuários em um banco de dados. Ele utiliza o padrão de arquitetura MVC (Model-View-Controller) simplificado.

## Arquivos e Estrutura

O projeto é composto pelos seguintes arquivos:

1. `config.php`: Contém as configurações de conexão com o banco de dados MySQL.
2. `index.php`: Página principal para cadastrar novos usuários.
3. `usuarios.php`: Página que lista todos os usuários cadastrados e permite editar ou excluir cada um.
4. `editar.php`: Página de formulário para editar um usuário específico.
5. `novo-usuario.php`: Página de formulário para adicionar um novo usuário.
6. `salvar.php`: Arquivo que processa as ações de cadastro, edição e exclusão de usuários no banco de dados.
7. `usuario.php`: Página que lista os usuários em formato de tabela.

## Estrutura do Banco de Dados

O banco de dados utilizado possui a seguinte estrutura:

- Tabela `usuarios`:
  - `id` (chave primária, auto incremento)
  - `nome` (varchar)
  - `email` (varchar)
  - `telefone` (varchar)
  - `marca` (varchar)
  - `serviços` (varchar)

## Como Usar

1. Certifique-se de ter um servidor web com PHP e MySQL configurado.
2. Importe o arquivo SQL fornecido (`script.sql`) para criar a tabela `usuarios` no seu banco de dados.
3. Coloque todos os arquivos do projeto na pasta raiz do seu servidor.
4. Acesse a página principal (`index.php`) para começar a cadastrar usuários.

## Funcionalidades

- **Cadastro de Usuários:** Adiciona novos usuários ao banco de dados.
- **Listagem de Usuários:** Mostra todos os usuários cadastrados em uma tabela.
- **Edição de Usuários:** Permite editar informações de usuários existentes.
- **Exclusão de Usuários:** Remove usuários do banco de dados.

## Tecnologias Utilizadas

- PHP 7
- MySQL
- Bootstrap 4

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir problemas (issues) ou enviar pull requests para melhorar este projeto.
