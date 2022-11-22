<?php
  if(isset($_POST['Confirmar'])) {
    // print_r($_POST['nome-cuidador']);
    // print_r($_POST['data-inicio']);
    // print_r($_POST['hora-inicio']);
    // print_r($_POST['hora-fim']);
    // print_r($_POST['tipo-servico']);

    include_once('../../db/conexao.php');

    $cuidador = $_POST['nome-cuidador'];
    $data_inicio = $_POST['data-inicio'];   
    $horario_inicio = $_POST['hora-inicio'];
    $horario_fim = $_POST['hora-fim'];
    $tipo_servico = $_POST['tipo-servico']; // Teste para ver se o valor está sendo passado

    $result = mysqli_query($conexao, "INSERT INTO agendamento (data_inicio, horario_inicio, horario_fim, tipo_servico) VALUES ('$data_inicio', '$horario_inicio', '$horario_fim', '$tipo_servico')");
  }

?>