$(document).ready(function () {
  $.ajax({
    url: 'http://localhost:3000/api/candidates/',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
      if (data && data.length > 0) {
        var candidatesTable = $('#candidatesTable').DataTable({
          language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
          },
          data: data,
          columns: [
            { data: 'name' },
            { data: 'email' },
            {
              data: null,
              render: function (data, type, row) {
                return '<button class="btn mx-1 btn-primary btn-edit" data-id="' + row.id + '">Editar</button>' +
                  '<button class="btn mx-1 btn-danger btn-delete" data-id="' + row.id + '">Excluir</button>';
              }
            }
          ]
        });

        $('#candidatesTable').on('click', '.btn-edit', function () {
          $('#editModalCandidate').modal('show');
  
          var candidateId = $(this).data('id');
          $.ajax({
            url: 'http://localhost:3000/api/candidates/' + candidateId +'/getbyid',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
              $('#editModalCandidate input[name="id"]').val(response.id);
              $('#editModalCandidate input[name="name"]').val(response.name);
              $('#editModalCandidate input[name="email"]').val(response.email);
            },
            error: function (error) {
              console.error('Erro:', error);
              alert('Ocorreu um erro ao buscar a vaga.');
            }
          });
        });
  
        $('#editModalCandidate form').on('submit', function (event) {
          event.preventDefault();
  
          var candidateId = $('#editModalCandidate input[name="id"]').val();
          var formData = {
            name: $('#editModalCandidate input[name="name"]').val(),
            email: $('#editModalCandidate input[name="email"]').val(),
          };
          debugger;

          $.ajax({
            url: 'http://localhost:3000/api/candidates/' + candidateId,
            type: 'PUT',
            dataType: 'json',
            data: formData,
            success: function (response) {
              alert('Candidato atualizada com sucesso!');
              location.reload();
            },
            error: function (error) {
              console.error('Erro:', error);
              alert('Ocorreu um erro ao atualizar o candidato.');
            }
          });
        });

        $('#candidatesTable').on('click', '.btn-delete', function () {
          var jobId = $(this).data('id');
          var confirmDelete = confirm("Tem certeza de que deseja excluir este candidato?");
          if (confirmDelete) {
            $.ajax({
              url: 'http://localhost:3000/api/candidates/' + jobId,
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
      } else {
        console.log('A lista de candidatos está vazia.');
      }
    },
    error: function (error) {
      console.error('Erro:', error);
    }
  });
});