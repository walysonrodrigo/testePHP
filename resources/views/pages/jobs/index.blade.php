@extends('layouts.app')

@section('content')
    <div class="content-fluid">
        <div class="row vh-100 mx-0 bg-dark d-flex align-itens-center justify-content-center">
            <div class="col-6 p-2 mt-3">
                <div class="d-flex align-itens-center justify-content-between">
                    <h2 class="text-center text-white">Lista de vagas</h2>
                    <a href="{{route('jobs.form')}}">
                        <button class="btn btn-primary btn-create mt-1">Adicionar vagas</button>
                    </a>
                </div>
                <hr style="background-color: white; height: 2px;">
                <!-- Table -->
                <div class="table-wrap">
                    <div class="table-wrap">
                        <table id="jobsTable">
                            <thead>
                                <tr>
                                    <th class='text-white'>Nome da Vaga</th>
                                    <th class='text-white'>Tipo</th>
                                    <th class='text-white'>Status</th>
                                    <th class='text-white'>Ações</th>
                                </tr>
                            </thead>
                            <tbody class='text-white'>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.modals.updateJobsModal')
@stop

@section('scripts')
    <script src="{{ asset('js/jobs/jobs.js') }}"></script>
@endsection