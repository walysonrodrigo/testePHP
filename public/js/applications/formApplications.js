$(document).ready(function () {
  $.ajax({
    url: 'http://localhost:3000/api/candidates',
    type: 'GET',
    dataType: 'json',
    success: function (candidates) {
      var candidatesSelect = $('#selectCandidates');
      candidates.forEach(function (candidato) {
        candidatesSelect.append($('<option>', {
          value: candidato.id,
          text: candidato.name
        }));
      });
    },
    error: function (error) {
      console.error('Erro:', error);
    }
  });

  $.ajax({
    url: 'http://localhost:3000/api/jobs/open',
    type: 'GET',
    dataType: 'json',
    success: function (jobs) {
      var jobsSelect = $('#selectJobs');
      jobs.forEach(function (vaga) {
        jobsSelect.append($('<option>', {
          value: vaga.id,
          text: vaga.title
        }));
      });
    },
    error: function (error) {
      console.error('Erro:', error);
    }
  });

  $('#applyJob').click(function () {
    var vagaId = $('#selectJobs').val();
    var candidatoId = $('#selectCandidates').val();
    
    $.ajax({
      url: 'http://localhost:3000/api/candidates/apply/',
      type: 'POST',
      dataType: 'json',
      data: {
        job_id: vagaId,
        candidate_id: candidatoId
      },
      success: function (response) {
        alert('Candidato inscrito com sucesso!');
      },
      error: function (error) {
        console.error('Erro:', error);
        alert("Erro ao inscrever o candidato na vaga! Verifique os campos e tente novamente.");
      }
    });
  });

});