<?php
  session_start();

  if(isset($_POST['Confirmar'])) {
    include_once('../db/conexao.php');

    // $data_inicio = filter_input(INPUT_POST, 'data-inicio');
    // $horario_inicio = filter_input(INPUT_POST, 'horario-inicio');
    // $horario_fim = filter_input(INPUT_POST, 'horario-fim');
    // $tipo_servico = filter_input(INPUT_POST, 'tipo-servico');

    $nome_cuidador = $_POST['nome-cuidador'];
    $nome_dono = $_POST['nome-dono'];
    $nome_pet = $_POST['nome-pet'];
    $tipo_pet = $_POST['tipo-pet'];
    $tipo_servico = $_POST['tipo-servico'];
    $data_inicio = $_POST['data-inicio'];   
    $horario_inicio = $_POST['horario-inicio'];
    $horario_fim = $_POST['horario-fim'];


    if(empty($nome_cuidador) && empty($nome_dono) && empty($nome_pet) && empty($tipo_pet) && empty($tipo_servico) && empty($data_inicio) && empty($horario_inicio) && empty($horario_fim)) {
      echo '<script>alert("Erro: preencha os dados da reserva")</script>';

    } else {
      $consulta = "SELECT * FROM agendamento WHERE nome_cuidador = '$nome_cuidador' AND nome_dono = '$nome_dono' AND nome_pet = '$nome_pet' AND tipo_pet = '$tipo_pet' AND tipo_servico = '$tipo_servico' AND data_inicio = '$data_inicio' AND horario_inicio = '$horario_inicio' AND horario_fim = '$horario_fim'";
      $resultConsulta = mysqli_query($conexao, $consulta);
      $row = mysqli_num_rows($resultConsulta);


      if($row > 0) {
        echo '<script>alert("Erro: já existe uma reserva para este horário")</script>';
      } else {
        $result = mysqli_query($conexao, "INSERT INTO agendamento (nome_cuidador, nome_dono, nome_pet, tipo_pet, tipo_servico, data_inicio, horario_inicio, horario_fim) VALUES ('$nome_cuidador', '$nome_dono', '$nome_pet', '$tipo_pet', '$tipo_servico', '$data_inicio', '$horario_inicio', '$horario_fim')");

        // if($result) {
        //   echo '<script>alert("Reserva realizada com sucesso")</script>';
        // } else {
        //   echo '<script>alert("Erro: não foi possível realizar a reserva")</script>';
        // }
      }

      // $result = mysqli_query($conexao, "INSERT INTO agendamento (data_inicio, horario_inicio, horario_fim, tipo_servico) VALUES ('$data_inicio', '$horario_inicio', '$horario_fim', '$tipo_servico')");
      // echo '<script>alert("Reserva realizada com sucesso!")</script>';
    }

  }
  header('Location: ../index.php');
?>