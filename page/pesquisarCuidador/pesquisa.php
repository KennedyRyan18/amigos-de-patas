<?php 
    include_once("../../db/conexao.php");
?>

<!DOCTYPE html>
<html lang="PT_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon-16x16.png">
    <link rel="stylesheet" href="style.css">
    <title>Cuidadores</title>
</head>
<body>

    <header>
            <div class="cabecalho">
                <a href="../../index.php">
                    <img class="logo" src="../../img/logo.png" alt="" width="140">
                </a>
            </div>
    </header>

    <main>

        <div class="title-cuidador">
            <h1>Encontre o seu amigo de patas</h1>
        </div>


        <div class="containerPesquisa">
            <form action="" method="post">
                <div>
                    <label>Qual serviço?</label>
                    <!-- <input type="text" class="buscar" name="buscar"> -->
                    <select name="buscar" id="buscar">
                        <option value="0"></option>
                        <option value="hospedagem">hospedagem</option>
                        <option value="passeio">Passeio</option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn" name="busc">Filtrar</button>
                </div>
            </form>
        </div>

        <section class="container-box">

            <ul class="list">
                <!-- Filtar os servicos da tbServico -->

            <?php

                //Filtro

                $filtro_sql = "";

                if ($_POST != null) {

                    $filtro = $_POST["buscar"];
                    $filtro_sql = "WHERE s.nomeServico = '$filtro' ";
                    
                }
            
                /*Lista de cuidadores*/


                // $sql = "SELECT cd.Cod_Cuidador, cd.Nome_Cuidador, cd.Bairro,
                //                 serv.Tipo_Servico, serv.Valor_servico
                //         FROM cuidador cd 
                //         LEFT JOIN servico AS serv ON serv.Cod_Servico=cd.Cod_Cuidador $filtro_sql";

                // $sql = "SELECT c.idCuidador, c.nomeCuidador, e.rua, e.numRua, e.bairro, e.cidade, s.nomeServico, s.valor
                //         FROM tbcuidador c
                //         LEFT JOIN tbcuidadorservico cs ON c.idCuidador = cs.idServico
                //         LEFT JOIN tbservico s ON s.idServico = cs.idServico
                //         LEFT JOIN tbendcuidador e ON e.idEndCuidador = c.idCuidador $filtro_sql";

                    $sql = "SELECT c.url, c.nomeCuidador, e.rua, e.numRua, e.bairro, e.cidade, s.nomeServico, s.valor
                            FROM tbcuidador c 
                            INNER JOIN tbcuidadorservico cs ON c.idCuidador = cs.idCuidador 
                            INNER JOIN tbservico s ON cs.idServico = s.idServico
                            INNER JOIN tbendcuidador e ON c.idCuidador = e.idEndCuidador $filtro_sql;";

                        
                
                $retorno = $conexao->query($sql);
                

                while ($registro = $retorno->fetch_array() ) {
                    $nomeCuidador = $registro["nomeCuidador"];
                    $bairro = $registro["bairro"];
                    $servico = $registro["nomeServico"];
                    $valor = $registro["valor"];
                    $url = $registro["url"];

                   

                    
                   echo"

                        <li>

                            <div class='cuidador1'>

                            <div>
                            <img class='foto-perfile' src='https://images.pexels.com/photos/8498533/pexels-photo-8498533.jpeg?auto=compress&cs=tinysrgb&w=1600' width='200px'>
                            </div>

                                <div class='informatio-name'>
                                    <h2>$nomeCuidador</h2>
                                    <span>Amor puro e verdadeiro se manifesta nos animais!</span>
                                    <p>Bairro: $bairro</p>
                                </div>
                    
                                <div class='information-value'>
                                    <h2 class='text-passeio'>$servico</h2>
                                    <span class='span'>Por hora: $valor</span>

                                <div class='informatio-button'>
                                    <a class='btn-primary' href='$url'>Ver o Perfil</a>
                                </div>

                            </div>

                        </li>
                    ";
                }

                
            ?>
            </ul>


        </section>



    </main>
    
</body>
</html>


 