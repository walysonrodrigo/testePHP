@extends('layouts.app')

@section('content')
    <div class="content-fluid">
        <div class="row mx-0 bg-dark d-flex align-itens-center justify-content-center" style="min-height:900px">
            <div class="col-6 p-2 mt-3">
                <div class="d-flex align-itens-center justify-content-between">
                    <h2 class="text-center text-white">Lista de candidaturas</h2>
                    <a href="{{route('candidates.apply')}}">
                        <button class="btn btn-primary btn-create mt-1">Candidatar</button>
                    </a>
                </div>
                <hr style="background-color: white; height: 2px;">
                <!-- Table -->
                <div class="table-wrap">
                    <table id="candidatesApplications">
                        <thead>
                            <tr>
                                <th class="text-white">Vaga</th>
                                <th class="text-white">Candidato</th>
                                <th class="text-white">Status da vaga</th>
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
@stop
@section('scripts')
    <script src="{{ asset('js/applications/applications.js') }}"></script>
@endsection