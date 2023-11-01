@extends('layouts.app')

@section('content')
    <div class="content-fluid">
        <div class="row vh-100 mx-0 bg-dark d-flex align-itens-center justify-content-center">
            <div class="col-6 p-2 mt-3">
                <h2 class="text-center text-white">Cadastro de vagas</h2>
                <hr style="background-color: white; height: 2px;">
                <form>
                    <div class="form-outline mb-4">
                        <label class="form-label text-white" for="title">Nome da vaga</label>
                        <input type="text" id="title" placeholder="Nome da vaga" class="form-control" />
                    </div>
                    <label class="form-label text-white" for="name">Tipo da vaga</label>
                    <select class="form-select mb-4" aria-label="Default select example" id='type'>
                        <option selected>Tipo da vaga</option>
                        <option value="CLT">CLT</option>
                        <option value="PJ">PJ</option>
                        <option value="FL">FreeLancer</option>
                    </select>
                    <label class="form-label text-white" for="name">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"  value="1">
                        <label class="form-check-label text-white" for="flexRadioDefault1">
                            Ativar vaga
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="0"
                            checked>
                        <label class="form-check-label text-white" for="active">
                            Desativar vaga
                        </label>
                    </div>
                    <!-- button  -->
                    <div class="row">
                        <div class="col-4">
                            <a href="{{route('jobs.index')}}">
                                <button type="button" class="w-100 btn btn-primary btn-block mb-4">Voltar</button>
                            </a>
                        </div>
                        <div class="col-8">
                            <button type="button" id="addJobs" class="w-100 btn btn-primary btn-block mb-4">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{ asset('js/jobs/formJobs.js') }}"></script>
@endsection