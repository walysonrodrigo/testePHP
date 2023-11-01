@extends('layouts.app')

@section('content')
    <div class="content-fluid">
        <div class="row vh-100 mx-0 bg-dark d-flex align-itens-center justify-content-center">
            <div class="col-6 p-2 mt-3">
                <h2 class="text-center text-white">Cadastro de Candidatos</h2>
                <hr style="background-color: white; height: 2px;">
                <form>
                    <div class="form-outline mb-4">
                        <label class="form-label text-white" for="name">Nome do candidato</label>
                        <input type="email" id="name" placeholder="Nome do candidato" class="form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label text-white" for="email">Email</label>
                        <input type="email" id="email" placeholder="Email" class="form-control" />
                    </div>
                    <!-- button  -->
                    <div class="row">
                        <div class="col-4">
                            <a href="{{route('candidates.index')}}">
                                <button type="button" class="w-100 btn btn-primary btn-block mb-4">Voltar</button>
                            </a>
                        </div>
                        <div class="col-8">
                        <button type="button" id="addCandidates" class="w-100 btn btn-primary btn-block mb-4">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script src="{{ asset('js/candidates/formCandidates.js') }}"></script>
@endsection