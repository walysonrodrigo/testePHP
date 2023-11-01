@extends('layouts.app')

@section('content')
    <div class="content-fluid">
        <div class="row vh-100 mx-0 bg-dark d-flex align-itens-center justify-content-center">
            <div class="col-6 p-2 mt-3">
                <h2 class="text-center text-white">Cadastrar candidato p/ vaga</h2>
                <hr style="background-color: white; height: 2px;">
                <form>
                    <div class="form-outline mb-4">
                        <label class="form-label text-white" for="selectJobs">Vaga</label>
                        <select class="form-select mb-4" aria-label="Default select example" id='selectJobs'>
                            <option selected disabled>Selecione o candidato</option>
                        </select>                   
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label text-white" for="selectCandidates">Candidato</label>
                        <select class="form-select mb-4" aria-label="Default select example" id='selectCandidates'>
                            <option selected disabled>Selecione o candidato</option>
                        </select>
                    </div>
                    <!-- button  -->
                    <div class="row">
                        <div class="col-4">
                            <a href="{{route('candidates.applications')}}">
                                <button type="button" class="w-100 btn btn-primary btn-block mb-4">Voltar</button>
                            </a>
                        </div>
                        <div class="col-8">
                            <button type="button" id="applyJob" class="w-100 btn btn-primary btn-block mb-4">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script src="{{ asset('js/applications/formApplications.js') }}"></script>
@endsection