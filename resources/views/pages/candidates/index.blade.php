@extends('layouts.app')

@section('content')
    <div class="content-fluid">
        <div class="row vh-100 mx-0 bg-dark d-flex align-itens-center justify-content-center">
            <div class="col-6 p-2 mt-3">
                <div class="d-flex align-itens-center justify-content-between">
                    <h2 class="text-center text-white">Lista de candidatos</h2>
                    <a href="{{route('candidates.form')}}">
                        <button class="btn btn-primary btn-create mt-1">Adicionar candidato</button>
                    </a>
                </div>
                <hr style="background-color: white; height: 2px;">
                <!-- Table -->
                <div class="table-wrap">
                    <table id="candidatesTable">
                        <thead>
                            <tr>
                                <th class="text-white">Nome</th>
                                <th class="text-white">Email</th>
                                <th class="text-white">Ações</th>
                            </tr>
                        </thead>
                        <tbody class='text-white'>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('pages.modals.updateCandidatesModal')
@stop
@section('scripts')
    <script src="{{ asset('js/candidates/candidates.js') }}"></script>
@endsection