<?php
  session_start();

  if(isset($_POST['Confirmar'])) {
    include_once("../db/conexao.php");

    $nome_cuidador = $_POST['nome-cuidador'];
    $nome_dono = $_POST['nome-dono'];
    $nome_pet = $_POST['nome-pet'];
    $tipo_pet = $_POST['tipo-pet'];
    $tipo_servico = $_POST['tipo-servico'];
    $data_inicio = $_POST['data-inicio'];   
    $data_fim = $_POST['data-fim'];
    $horario_inicio = $_POST['horario-inicio'];
    $horario_fim = $_POST['horario-fim'];
    $valor_servico = $_POST['valor-servico'];

    if(empty($nome_cuidador) && empty($nome_dono) && empty($nome_pet) && empty($tipo_pet) && empty($tipo_servico) && empty($data_inicio) && empty($data_fim) && empty($horario_inicio) && empty($horario_fim) && empty($valor_servico)) {
      echo '<script>alert("Erro: preencha os dados da reserva")</script>';
    } else {
      $consulta = "SELECT * FROM agendamento WHERE nome_cuidador = '$nome_cuidador' AND nome_dono = '$nome_dono' AND nome_pet = '$nome_pet' AND tipo_pet = '$tipo_pet' AND tipo_servico = '$tipo_servico' AND data_inicio = '$data_inicio' AND data_fim = '$data_fim' AND horario_inicio = '$horario_inicio' AND horario_fim = '$horario_fim' AND valor_servico = '$valor_servico'";
      $resultConsulta = mysqli_query($conexao, $consulta);
      $row = mysqli_num_rows($resultConsulta);

      if($row > 0) {
        echo '<script>alert("Erro: já existe uma reserva para este horário")</script>';
      } else {
        $result = mysqli_query($conexao, "INSERT INTO agendamento (nome_cuidador, nome_dono, nome_pet, tipo_pet, tipo_servico, data_inicio, data_fim, horario_inicio, horario_fim, valor_servico) VALUES ('$nome_cuidador', '$nome_dono', '$nome_pet', '$tipo_pet', '$tipo_servico', '$data_inicio', '$data_fim', '$horario_inicio', '$horario_fim', '$valor_servico')");
        
      }
    }
  }
  header('Location: ../index.php');
?>