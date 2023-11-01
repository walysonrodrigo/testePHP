$(document).ready(function () {
  $('#addCandidates').on('click', function (event) {
    event.preventDefault(); // Evita o comportamento padrão de envio do formulário
    var name = $('#name').val();
    var email = $('#email').val();

    // Monta o objeto de dados
    var data = {
      name,
      email
    };

    $.ajax({
      url: 'http://localhost:3000/api/candidates/',
      type: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(data),
      success: function (response) {
        alert("Candidato realizado com sucesso!");

        $('#name').val('');
        $('#email').val('');
      },
      error: function (error) {
        console.error('Erro:', error);
        alert("Erro ao cadastrar candidato! Verifique os campos e tente novamente.");
      }
    });
  });
});