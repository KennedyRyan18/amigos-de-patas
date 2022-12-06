<?php
    include_once('db/conexao.php');

    session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page/servico/style.php">
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script type="text/javascript">
        $(document).on('click', 'ul li', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>

    <script>
        document.getElementsByClassName()
    </script>

    <title>Perfil dos Cuidadores</title>
</head>
<body >
    <header>
        <div>
            <a class="navbar-brand " href="#">
                <img src="img/logo.png" width="200" height="120" class="img-fluid">
            </a>
        </div>
        
        <div class="Perfil">
            <div class="log">
                <h3 class="NomeProfile">
                    <?php

                        $result = mysqli_query($conexao, "SELECT `nome` FROM `tbDono` WHERE `idDono` = 1");
                        echo mysqli_fetch_assoc($result)['nome'];
                    ?>
                </h3>        
                <a href="#"><p class="Logout">Sair</p></a>
            </div>
            
            <div class="foto">
                <a href="#">
                    <img src="img/user.png" width="80px">
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="box">
            <h3>Serviços Disponíveis</h3>
            <h4>Aqui seu animal é tratado igual a um rei!</h4>



                <ul class="btn">

                    <li class="active">
                        <a href="#" class="active">
                            <div class="container1">
                                <img src="img/dogHospedagem.jpeg" width="120px">
                                <h2>Hospedagem<h2>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="container2">
                                <img src="img/dogPasseio.jpeg" width="120px">
                                <h2>Passeio<h2>
                            </div>
                        </a>
                    </li>
            
                <!-- <li>
                    <a href="#">
                        <div class="container3">
                            <img src="img/dogVeterinario.jpeg" width="120px">
                            <h2>Veterinário<h2>
                        </div>
                    </a>
                </li> -->
                <!-- Está função está desabilidada por enquanto -->

            </ul>

        </div>

        <div class="box2">
            <div class="pet">
                <form action="\amigosdepatasv4\page\pesquisarCuidador\pesquisa.php" method="POST">
                    <label>Qual serviço você deseja?</label>

                    <select name="buscar" id="buscar">
                        <option value="0"></option>
                        <option value="hospedagem">Hospedagem</option>
                        <option value="passeio">Passeio</option>
                    </select>

                    <button class="btn-buscar" type="submit">Buscar</button>
                </form>
            </div>
            <!-- <a class="btn-buscar" href="page/pesquisarCuidador/pesquisa.php">
                <div>
                    <p>Buscar</p>
                </div>
            </a> -->

        </div>
        
    </main>
    
</body>
</html>