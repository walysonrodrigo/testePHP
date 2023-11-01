@extends('layouts.app')

@section('content')
    <div class="content-fluid">
        <div class="row mx-0 bg-dark d-flex align-itens-center justify-content-center">
            <div class="col-6 p-2 mt-3">
                <!-- Teste para candidatos à vaga de Desenvolvedor PHP -->
                <h1 class="text-white">Teste para candidatos à vaga de Desenvolvedor PHP</h1>
                <p class="text-white">Olá caro desenvolvedor, nesse teste analisaremos seu conhecimento geral e inclusive velocidade de desenvolvimento. Abaixo explicaremos tudo o que será necessário.</p>
                <h2 class="text-white">Instruções do candidato</h2>
                <ul class="text-white">
                    <li>Lembre-se de ler o arquivo teste-php.md</li>
                    <li>Antes de rodar o comando:</li>
                    <li>docker compose up -d testephp-db && sleep 2 && docker compose up testephp-app</li>
                    <li>Certifique-se que as portas que irão subir à aplicação estão disponíveis.</li>
                </ul>
                <h2 class="text-white">Instruções</h2>
                <ul class="text-white">
                    <li>O desafio consiste em implementar uma aplicação web utilizando PHP, um banco de dados relacional (Mysql, Postgres ou SQLite), que terá como finalidade a inscrição de candidatos a uma oportunidade de emprego.</li>
                    <li>Sua aplicação deve possuir:</li>
                    <ul>
                        <li>CRUD de vagas:</li>
                        <ul>
                            <li>Criar, editar, excluir e listar vagas.</li>
                            <li>A vaga pode ser CLT, Pessoa Jurídica ou Freelancer.</li>
                        </ul>
                        <li>CRUD de candidatos:</li>
                        <ul>
                            <li>Criar, editar, excluir e listar candidatos.</li>
                        </ul>
                        <li>Um candidato pode se inscrever em uma ou mais vagas.</li>
                        <li>Deve ser ser possível "pausar" a vaga, evitando a inscrição de candidatos.</li>
                        <li>Cada CRUD:</li>
                        <ul>
                            <li>Deve ser filtrável e ordenável por qualquer campo, e possuir paginação de 20 itens.</li>
                            <li>Deve possuir formulários para criação e atualização de seus itens.</li>
                            <li>Deve permitir a deleção de qualquer item de sua lista.</li>
                            <li>Implementar validações de campos obrigatórios e tipos de dados.</li>
                        </ul>
                    </ul>
                </ul>

                <h2 class="text-white">Banco de dados</h2>
                <ul class="text-white">
                    <li>Você pode criar a modelagem e implementar as validações necessárias da camada da forma que julgar melhor.</li>
                </ul>

                <h2 class="text-white">Tecnologias a serem utilizadas</h2>
                <ul class="text-white">
                    <li>Devem ser utilizadas as seguintes tecnologias:</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                    <li>PHP (Framework Opcional: Laravel, CodeIgnither)</li>
                    <li>Docker (construção do ambiente de desenvolvimento)</li>
                    <li>Mysql, Postgres ou SQLite</li>
                </ul>

                <h2 class="text-white">Entrega</h2>
                <ul class="text-white">
                    <li>Para iniciar o teste, faça um fork deste repositório; **Se você apenas clonar o repositório não vai conseguir fazer push.**</li>
                    <li>Crie uma branch com o seu nome completo;</li>
                    <li>Altere o arquivo teste-php.md com as informações necessárias para executar o seu teste (comandos, instalações, etc);</li>
                    <li>Depois de finalizado, envie-nos o pull request;</li>
                </ul>

                <h2 class="text-white">Bônus</h2>
                <ul class="text-white">
                    <li>API Rest JSON para todos os CRUDS listados acima.</li>
                    <li>Permitir deleção em massa de itens nos CRUDs.</li>
                    <li>Permitir que o usuário mude o número de itens por página.</li>
                    <li>Implementar autenticação de usuário na aplicação.</li>
                </ul>

                <h2 class="text-white">O que iremos analisar</h2>
                <ul class="text-white">
                    <li>Organização do código;</li>
                    <li>Conhecimento de padrões (PSRs, design patterns, SOLID);</li>
                    <li>Separação de módulos e componentes;</li>
                    <li>Legibilidade;</li>
                    <li>Tratamento de erros;</li>
                </ul>
            </div>
        </div>
    </div>
@stop
