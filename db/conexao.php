<?php
  $dbHost = "localhost";
  $dbUser = "root";
  $dbPass = "";
  $dbName = "amigosdepatasv2";

  $conexao = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

  // if($conexao->connect_errno) {
  //   echo "Falha na conexão";
  // } else {
  //   echo "Conexão realizada com sucesso";
  // }

?>