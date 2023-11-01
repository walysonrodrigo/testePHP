$(document).ready(function () {
  $.ajax({
    url: 'http://localhost:3000/api/jobs/',
    type: 'GET',
    dataType: 'json',
    success: function (data) {
      var jobsTable = $('#jobsTable').DataTable({
        language: {
          url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
        },
        data: data,
        columns: [
          { data: 'title' },
          { data: 'type' },
          {
            data: 'active', render: function (data) {
              return data == 1 ? 'Ativado' : 'Desativado';
            }
          },
          {
            data: null,
            render: function (data, type, row) {
              return '<button class="btn mx-1 btn-primary btn-edit" data-id="' + row.id + '">Editar</button>' +
                '<button class="btn mx-1 btn-danger btn-delete" data-id="' + row.id + '">Excluir</button>';
            }
          }
        ]
      });

      $('#jobsTable').on('click', '.btn-edit', function () {
        $('#editModalJob').modal('show');

        var jobId = $(this).data('id');
        $.ajax({
          url: 'http://localhost:3000/api/jobs/' + jobId +'/getbyid',
          type: 'GET',
          dataType: 'json',
          success: function (response) {
            $('#editModalJob input[name="id"]').val(response.id);
            $('#editModalJob input[name="title"]').val(response.title);
            $('#editModalJob select[name="type"]').val(response.type);
            $('#editModalJob select[name="active"]').val(response.active);
          },
          error: function (error) {
            console.error('Erro:', error);
            alert('Ocorreu um erro ao buscar a vaga.');
          }
        });
      });

      $('#editModalJob form').on('submit', function (event) {
        event.preventDefault();

        var jobId = $('#editModalJob input[name="id"]').val();
        var formData = {
          title: $('#editModalJob input[name="title"]').val(),
          type: $('#editModalJob select[name="type"]').val(),
          active: $('#editModalJob select[name="active"]').val()
        };
        $.ajax({
          url: 'http://localhost:3000/api/jobs/' + jobId,
          type: 'PUT',
          dataType: 'json',
          data: formData,
          success: function (response) {
            alert('Vaga atualizada com sucesso!');
            location.reload();
          },
          error: function (error) {
            console.error('Erro:', error);
            alert('Ocorreu um erro ao atualizar a vaga.');
          }
        });
      });

      $('#jobsTable').on('click', '.btn-delete', function () {
        var jobId = $(this).data('id');
        var confirmDelete = confirm("Tem certeza de que deseja excluir esta vaga?");
        if (confirmDelete) {
          $.ajax({
            url: 'http://localhost:3000/api/jobs/' + jobId,
            type: 'DELETE',
            dataType: 'json',
            success: function (response) {
              alert('Vaga excluída com sucesso!');
              location.reload();
            },
            error: function (error) {
              console.error('Erro:', error);
              alert('Ocorreu um erro ao excluir a vaga.');
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