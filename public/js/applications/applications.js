$(document).ready(function () {
  $.ajax({
    url: 'http://localhost:3000/api/candidates/applications',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
      var candidatesApplications = $('#candidatesApplications').DataTable({
        language: {
          url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
        },
        data: data,
        columns: [
          { data: 'job.title' },
          { data: 'candidate.name' },
          {
            data: 'job.active', render: function (data) {
                return data == 1 ? 'Ativo' : 'Pausada';
            }
          },
          {
            data: null,
            render: function (data, type, row) {
              return '<button class="btn mx-1 btn-danger btn-delete" data-id="' + row.id + '">Desistir</button>';
            }
          }
        ]
      });

      $('#candidatesApplications').on('click', '.btn-delete', function () {
        var jobId = $(this).data('id');
        var confirmDelete = confirm("Tem certeza de que deseja desistir esta candidatura? Esta ação não poderá ser desfeita.");
        if (confirmDelete) {
          $.ajax({
            url: 'http://localhost:3000/api/candidates/' + jobId + '/cancelapplication',
            type: 'DELETE',
            dataType: 'json',
            success: function (response) {
              alert('Candidato excluído com sucesso!');
              location.reload();
            },
            error: function (error) {
              console.error('Erro:', error);
              alert('Ocorreu um erro ao excluir o candidato.');
            }
          });
        }
      });
    },
    error: function (error) {
      console.error('Erro:', error);
    }
  });
});