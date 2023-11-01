$(document).ready(function () {
  $('#addJobs').on('click', function (event) {
    event.preventDefault(); // Evita o comportamento padrão de envio do formulário
    var title = $('#title').val();
    var type = $('#type').val();
    var active = $('input[name="flexRadioDefault"]:checked').val();

    var data = {
      title,
      type,
      active
    };

    $.ajax({
      url: 'http://localhost:3000/api/jobs/',
      type: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(data),
      success: function (response) {
        alert("Vaga cadastrada com sucesso!");

        $('#title').val('');
        $('input[name="flexRadioDefault"]').prop('checked', false);
      },
      error: function (error) {
        console.error('Erro:', error);
        alert("Erro ao cadastrar vaga! Verifique os campos e tente novamente.");
      }
    });
  });
});