

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Cuidador</title>


    <link rel="stylesheet" href="perfil.css">
    <link rel="stylesheet" href="dialog.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon-16x16.png">

</head>
<body>
    <header>
        <a href="../../index.php">Volta para Página Principal</a>

        <!-- <img src="imagens/irina-blok.jpg" alt=""> -->
    </header>
    <main>
        <article>
            <section>
                <div class="flex-container">
                    <div class="box-perfile">
                        <img class="foto-perfile" src="https://images.pexels.com/photos/8498533/pexels-photo-8498533.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="">
                        <div class="box-perfile-name">
                            <h2 class="perfile-name" name="nome-cuidador">
                                <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Nome_Cuidador` FROM `cuidador` WHERE `Cod_cuidador` = 2");
                                    echo mysqli_fetch_assoc($result)['Nome_Cuidador'];
                                ?>
                            </h2>
                            <p class="perfile-text">Amor puro e verdadeiro se manifesta nos animais!</p>
                            <p class="perfile-endereco"> 
                                Bairro:<span class="perfile-dados">
                                    <?php
                                        include_once('../../db/conexao.php');

                                        $result = mysqli_query($conexao, "SELECT `Bairro` FROM `cuidador` WHERE `Cod_cuidador` = 2");
                                        echo mysqli_fetch_assoc($result)['Bairro'];
                                    ?>
                                </span>
                            </p>
                        </div>
                        <div class="star-avaliacao"></div>
                        <div class="name-perfile">
                            <h1></h1>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="title">
                            <h2>Contratar</h2>
                        </div>
                        <div class="price-table">
                            <div class="col-01">
                                <h3>
                                    <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Tipo_servico` FROM `servico` WHERE `Cod_servico` = 2");
                                    echo mysqli_fetch_assoc($result)['Tipo_servico'];
                                    ?>
                                </h3>
                                <!-- <h3>
                                    <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Tipo_servico` FROM `servico` WHERE `Cod_servico` = 1");
                                    echo mysqli_fetch_assoc($result)['Tipo_servico'];
                                    ?>
                                </h3> -->
                            </div>
                            <div class="col-02">
                                <h3>
                                    <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Valor_servico` FROM `servico` WHERE `Cod_servico` = 2");
                                    echo mysqli_fetch_assoc($result)['Valor_servico'];
                                    ?>
                                </h3>
                                <!-- <h3>
                                    <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Valor_servico` FROM `servico` WHERE `Cod_servico` = 1");
                                    echo mysqli_fetch_assoc($result)['Valor_servico'];
                                    ?>
                                </h3> -->
                            </div>
                            <!-- <div>
                                    <p class="hosp-descricao">*O valor do passeio é cabrado por hora.</p>
                                    <p class="hosp-descricao">*O valor da hospedagem é cabrado por dia.</p>
                                </div> -->
                        </div>
                        <div class="box-button">
                            <button class="btn-reservar">Reservar</button>
                        </div>
                        <dialog class="reservar-hospedagem">
                            <div class="dialog-header">
                                <h2>Reserva</h2>
                                <button class="btn-close" type="button">X</button>
                            </div>
                            <div class="dialog-body" id="my-group">
                                <h5>Selecione o Serviço</h5>
                                <p class="servico">
                                    <button class="btn-servico" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Passeio</button>
                                    <!-- <input class="btn-servico" type="button" name="passeio" id="passeio" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" value="Passeio"> -->
                                    <!-- <button class="btn-servico" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Hospedagem</button> -->
                                    <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                                        Veterinário
                                    </button> -->
                                </p>
                                
                                <form action="../../controller/reservar-passeio.php" method="post">
                                
                                    <div class="collapse" id="collapseExample" data-parent="#my-group">
                                        <div class="card card-body">
                                            <div class="tab-calendario">
                                            <div class="box-pet">
                                                    <!-- Teste -->
                                                    <select class="select" name="nome-cuidador" id="nome-cuidador">
                                                        <option value="<?php
                                                            include_once('../../db/conexao.php');

                                                            $result = mysqli_query($conexao, "SELECT `Nome_Cuidador` FROM `cuidador` WHERE `Cod_cuidador` = 1");
                                                            echo mysqli_fetch_assoc($result)['Nome_Cuidador'];
                                                        ?>">Cuidador 1</option>
                                                    </select>
                                                    <select name="nome-dono" id="nome-dono">
                                                        <option value="<?php
                                                            include_once('../../db/conexao.php');

                                                            $result = mysqli_query($conexao, "SELECT `Nome_Dono` FROM `dono` WHERE `Cod_Dono` = 1");
                                                            echo mysqli_fetch_assoc($result)['Nome_Dono'];
                                                        ?>">Dono 1</option>
                                                    </select>
                                                    <select name="nome-pet" id="nome-pet">
                                                        <option value="<?php
                                                            include_once('../../db/conexao.php');

                                                            $result = mysqli_query($conexao, "SELECT `Nome_Pet` FROM `pet` WHERE `Cod_Pet` = 1");
                                                            echo mysqli_fetch_assoc($result)['Nome_Pet'];
                                                        ?>">Pet 1</option>
                                                    </select>
                                                    <select name="tipo-pet" id="tipo-pet">
                                                        <option value="<?php
                                                            include_once('../../db/conexao.php');

                                                            $result = mysqli_query($conexao, "SELECT `Tipo_Pet` FROM `pet` WHERE `Cod_Pet` = 1");
                                                            echo mysqli_fetch_assoc($result)['Tipo_Pet'];
                                                        ?>" required>tipo pet</option>
                                                    </select>
                                                    <!-- Teste -->
                                                    
                                                    <select name="tipo-servico" id="tipo-servico">
                                                        <option value="passeio" name="passeio" required>passeio</option>
                                                    </select>
                                                </div>
                                                <h3 class="titulo-data">Data</h3>
                                                <div class="box-data">
                                                    Início<input type="date" name="data-inicio" id="data-inicio" required>
                                                </div>
                                                <h3 class="titulo-horario">Horário</h3>
                                                <div class="box-horario">
                                                    Início<input type="time" name="horario-inicio" id="horario-inicio" required>
                                                    <!-- Quantidade de Horas<input type="number" name="quantidade-horas" id="quantidade-horas" min="1" max="24" required> -->
                                                    Fim<input type="time" name="horario-fim" id="horario-fim" required>
                                                </div>
                                                
                                                <div class="box-button-confirma">
                                                    <!-- <button class="confirmar" type="submit">Confirmar</button> -->
                                                    <input class="confirmar" type="submit" value="Confirmar" name="Confirmar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="../reservar-hospedagem.php" method="post">
                                    <div class="collapse" id="collapseExample2" data-parent="#my-group">
                                        <div class="card card-body">
                                            <div class="tab-calendario">
                                                <h3 class="titulo-data">Data do Serviço</h3>
                                                <div class="inicio">
                                                    Início<input type="date" name="data-inicio" id="data-inicio">
                                                    Fim<input type="date" name="data-fim" id="data-fim">
                                                </div>
                                                <h3 class="titulo-horario">Horário do Serviço</h3>
                                                <div class="inicio">
                                                    Início<input class="time" type="time" name="hora-inicio" id="hora-inicio">
                                                    Fim<input class="time" type="time" name="hora-fim" id="hora-fim">
                                                <div class="select-pet">
                                                    <h3>Selecione o Pet</h3>
                                                    <select name="" id="">
                                                        <option value="">Selecione</option>
                                                        <option value="">Cachorro</option>
                                                        <option value="">Gato</option>
                                                    </select>
                                                    <h3>Quantidade</h3>
                                                    <section>
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                                    <span class="glyphicon glyphicon-minus"></span>
                                                                </button>
                                                            </span>
                                                            <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                                    <span class="glyphicon glyphicon-plus"></span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="box-button-confirma">
                                                <input class="confirmar" type="submit" value="submit" name="Confirmar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                    <div class="collapse" id="collapseExample3" data-parent="#my-group">
                                        <div class="card card-body">
                                            Conteúdo do botão 3
                                        </div>
                                    </div>
                                </div>
                            </dialog>

                        <div class="box-mensagem">
                            <a href="http://" class="enviar-mensagem">Enviar Mensagem</a>

                        </div>
                    </div>
                </div>
                <div class="information">
                    <div>
                        <h2 >Pets que aceito</h2>
                    </div>
                    <div class="information-pets">
                        <div class="pets-aceito">
                            <img src="../../img/cachorro.png" alt="">
                            <p>Cachorro</p>
                        </div>
                        <div class="pest-nao-aceito">
                            <img src="../../img/gato.png" title="Não aceito" alt="">
                            <p>Gato</p>
                        </div>
                        <div class="pest-nao-aceito">
                            <img src="../../img/até_10kg-removebg-preview (1).png" title="Não aceito" alt="">
                            <p>até 10kg</p>
                        </div>
                        <div class="pets-aceito">
                            <img src="../../img/até_25kg-removebg-preview.png" alt="">
                            <p>até 25kg</p>
                        </div>
                        <div class="pets-aceito">
                            <img src="../../img/+25kg-removebg-preview.png" alt="">
                            <p>acima 25kg</p>
                        </div>
                        <div class="pets-aceito">
                            <img  src="../../img/+_40kg-removebg-preview.png" alt="">
                            <p>acima de 40kg</p>
                        </div>
                    </div>
                    <div class="information-pets-02">
                    </div>
                </div>
            </section>
            <!-- <div class="information"></div> -->
            <section>
            </section>
            <!-- <div class="flex-item-checkbox">
                <button type="reset" value="btn-00">Redefinir</button>
                <button type="submit" value="btn-01" >Agendar</button>
            </div> -->
        </article>
    </main>
    <footer>
        <p>
            Desenvolido pelo Time de TEIT - Projeto <a href="https://trello.com/b/lPRcZjWK/amigodepatas" target="_blank">Amigo de Patas</a>
        </p>
    </footer>

    <script src="popup.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</body>
</html>