<?php
  if(isset($_POST['submit'])) {
    // include_once("../db/conexao.php");

    print_r($_POST['data-inicio']);
    print_r($_POST['data-fim']);
    print_r($_POST['hora-inicio']);
    print_r($_POST['hora-fim']);
  }
?>