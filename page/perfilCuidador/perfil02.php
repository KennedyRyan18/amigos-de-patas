<?php
    include_once('../../db/conexao.php');
?>

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
                                    $result = mysqli_query($conexao, "SELECT nomeCuidador FROM `tbCuidador` WHERE `idCuidador` = 2");
                                    echo mysqli_fetch_assoc($result)['nomeCuidador'];
                                ?>
                            </h2>
                            <p class="perfile-text">Amor puro e verdadeiro se manifesta nos animais!</p>
                            <p class="perfile-endereco"> 
                                Bairro:<span class="perfile-dados">
                                    <?php
                                        $result = mysqli_query($conexao, "SELECT bairro FROM tbendcuidador WHERE idEndCuidador = 2");
                                        echo mysqli_fetch_assoc($result)['bairro'];
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
                                        $result = mysqli_query($conexao, "SELECT s.nomeServico, c.nomeCuidador FROM tbservico s INNER JOIN tbcuidadorservico cs ON s.idServico = cs.idServico INNER JOIN tbcuidador c ON cs.idCuidador = c.idCuidador WHERE s.idServico = 1 AND c.idCuidador = 1");
                                        echo mysqli_fetch_assoc($result)['nomeServico'];
                                    ?>
                                </h3>
                                <h3>
                                    <!-- <?php
                                        $result = mysqli_query($conexao, "SELECT s.tiposervico, c.nomeCuidador FROM tbservico s INNER JOIN tbcuidadorservico cs ON s.idServico = cs.idServico INNER JOIN tbcuidador c ON cs.idCuidador = c.idCuidador WHERE s.idServico = 2 AND c.idCuidador = 1");
                                        echo mysqli_fetch_assoc($result)['nomeServico'];
                                    ?> -->
                                </h3>
                            </div>
                            <div class="col-02">
                                <h3>
                                    <?php
                                        $result = mysqli_query($conexao, "SELECT s.valor, c.nomeCuidador FROM tbservico s INNER JOIN tbcuidadorservico cs ON s.idServico = cs.idServico INNER JOIN tbcuidador c ON cs.idCuidador = c.idCuidador WHERE s.idServico = 1 AND c.idCuidador = 1");
                                        echo mysqli_fetch_assoc($result)['valor'];
                                    ?>
                                </h3>
                                <!-- <h3>
                                    <?php
                                        $result = mysqli_query($conexao, "SELECT s.valor, c.nomeCuidador FROM tbservico s INNER JOIN tbcuidadorservico cs ON s.idServico = cs.idServico INNER JOIN tbcuidador c ON cs.idCuidador = c.idCuidador WHERE s.idServico = 2 AND c.idCuidador = 1");
                                        echo mysqli_fetch_assoc($result)['valor'];
                                    ?>
                                </h3> -->
                            </div>
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
                                                    <!-- CUIDADOR-->
                                                    <h3>Cuidador</h3>
                                                    <select name="nome-cuidador" id="nome-cuidador">
                                                        <option value="">
                                                            <?php
                                                                $result = mysqli_query($conexao, "SELECT nomeCuidador FROM tbCuidador WHERE `idCuidador` = 2");
                                                                echo mysqli_fetch_assoc($result)['nomeCuidador'];
                                                            ?>
                                                        </option>
                                                    </select>
                                                    <!-- CUIDADOR -->
                                                    <!-- DONO -->
                                                    <h3>Dono</h3>
                                                    <select name="nome-dono" id="nome-dono">
                                                        <option value="">
                                                            <?php
                                                                $result = mysqli_query($conexao, "SELECT nome FROM `tbDono` WHERE `idDono` = 1");
                                                                echo mysqli_fetch_assoc($result)['nome'];
                                                            ?>
                                                        </option>
                                                    </select>
                                                    <!-- DONO -->
                                                    <!-- TIPO DE PET -->
                                                    <h3>Selecione o Pet</h3>
                                                    <select class="select-pet" name="tipo-pet" id="tipo-pet" required>
                                                        <option value=""></option>
                                                        <option value="2">
                                                            <?php
                                                                $result = mysqli_query($conexao, "SELECT `tipoPet` FROM `tbPet` WHERE `idPet` = 2");
                                                                echo mysqli_fetch_assoc($result)['tipoPet'];
                                                            ?>
                                                        </option>
                                                    </select>
                                                    <!-- TIPO DE PET -->
                                                    <!-- TIPO DE SERVIÇO -->
                                                    <h3>Tipo de Serviço</h3>
                                                    <select name="tipo-servico" id="tipo-servico">
                                                    <option value="1">
                                                            <?php
                                                                $result = mysqli_query($conexao, "SELECT nomeServico FROM tbServico WHERE idServico = 1");
                                                                echo mysqli_fetch_assoc($result)['nomeServico'];
                                                            ?>
                                                        </option>
                                                    </option>
                                                    </select>
                                                    <!-- TIPO DE SERVIÇO -->
                                                    <!-- PET -->
                                                </div>
                                                <!-- DATA -->
                                                <h3 class="titulo-data">Data</h3>
                                                <div class="box-data">
                                                    <label for="data-inicio">Início</label>
                                                    <input type="date" name="data-inicio" id="data-inicio" min="<?php $date_min = date('Y-m-d'); echo $date_min;?>" max="<?php $d = strtotime("+14 Days"); echo date('Y-m-d', $d);?>" required>
                                                </div>
                                                <!-- DATA -->
                                                <!-- HORARIO -->
                                                <h3 class="titulo-horario">Horário</h3>
                                                <div class="box-horario">
                                                    <label for="horario-inicio">Início</label>
                                                    <input type="time" name="horario-inicio" id="horario-start" min="08:00" max="17:00" oninput="calcHoras()" required >

                                                    <label for="horario-fim">Fim</label>
                                                    <input type="time" name="horario-fim" id="horario-end" min="09:00" max="18:00" oninput="calcHoras()" required >

                                                    <script>
                                                        var inputHora = document.getElementById('horario-start');
                                                        var inputHora2 = document.getElementById('horario-end');

                                                        input.addEventListener('input', function() {
                                                            if (inputHora.value > inputHora2.value) {
                                                                inputHora2.value = inputHora.value;
                                                            }
                                                        });

                                                    </script>
                                                    <div>
                                                        Valor a Pagar R$: <input type="text" name="valor-servico" id="resultPasseio">
                                                    </div>
                                                    <!-- CALCULAR HORARIO -->
                                                    <script>
                                                        function calcHoras() {
                                                            var horaInicio = document.getElementById('horario-start').value;
                                                            var horaFim = document.getElementById('horario-end').value;

                                                            var intervalo = parseInt(horaFim) - parseInt(horaInicio);

                                                            var valor = intervalo * 20;

                                                            document.getElementById('resultPasseio').value = valor;
                                                        }
                                                    </script>
                                                    
                                                <!-- CALCULAR HORARIO -->
                                                </div>
                                                <!-- HORARIO -->
                                            </div>
                                            <!-- BOTAO CONFIRMAR -->
                                            <div class="box-button-confirma" style="display: flex; justify-content: space-evenly;">
                                                <input class="redefinir" type="reset"  value="Redefinir" name="Redefinir" style="
                                                    background-color: var(--cor3);
                                                    border: none;
                                                    border-radius: 5px;
                                                    color: var(--cor5);
                                                    font-family: var(--fonte-01);
                                                    font-size: 1.2rem;
                                                    padding: 10px;
                                                    cursor: pointer;
                                                    width: 150px;
                                                    margin-top: 10px;
                                                ">
                                                <input class="confirmar" type="submit" value="Confirmar" name="Confirmar" style="
                                                    display: flex;
                                                    justify-content: space-evenly;
                                                    background-color: var(--cor8);
                                                    border: none;
                                                    border-radius: 5px;
                                                    color: var(--cor5);
                                                    font-family: var(--fonte-01);
                                                    font-size: 1.2rem;
                                                    padding: 10px;
                                                    cursor: pointer;
                                                    width: 150px;
                                                    margin-top: 10px;
                                                ">
                                            </div>
                                            <!-- BOTAO CONFIRMAR -->
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
                            <a class="enviar-mensagem" href="https://api.whatsapp.com/send?phone=5519999999999&text=Olá, gostaria de saber mais sobre os serviços do Amigos de Patas." target="_blank">Enviar Mensagem</a>
                        </div>
                    </div>
                </div>
                <div class="information">
                    <div>
                        <h2>Pets que aceito</h2>
                    </div>
                    <div class="information-pets">
                        <div>
                            <img src="../../img/cachorro.png" alt="">
                            <p>Cachorro(a)</p>
                            <p class="test">
                                <?php
                                    $result = mysqli_query($conexao, "SELECT tp.tipoPet FROM tbpet tp INNER JOIN tbcuidador c ON tp.idPet = c.idCuidador WHERE tp.tipoPet = 'cachorra' && tp.tipopet = 'cachorro' AND c.nomeCuidador = 'Marcia Maia';
                                    ");
                                    // echo mysqli_num_rows($result) . "<br>";
                                    for($i = 0; $i < mysqli_num_rows($result); $i++){
                                        // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                    }
                                    if(mysqli_num_rows($result) == 0){
                                        echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                    } else {
                                        echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                    }
                                ?>
                            </p>
                        </div>
                        <div>
                            <img src="../../img/gato.png" alt="">
                            <p>Gato(a)</p>
                                <p>
                                    <?php
                                        $result = mysqli_query($conexao, "SELECT tp.tipoPet FROM tbpet tp INNER JOIN tbcuidador c ON tp.idPet = c.idCuidador WHERE tp.tipoPet = 'gata' || tp.tipopet = 'gato' AND c.nomeCuidador = 'Marcia Maia';
                                        ");
                                        // echo mysqli_num_rows($result) . "<br>";
                                        for($i = 0; $i < mysqli_num_rows($result); $i++){
                                            // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                        }
                                        if(mysqli_num_rows($result) == 0){
                                            echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                        } else {
                                            echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                        }
                                    ?>
                                </p>
                        </div>
                        <div>
                            <img src="../../img/até_10kg-removebg-preview (1).png" alt="">
                            <p>3-5kg</p>
                            <p>
                                <?php
                                    $result = mysqli_query($conexao, "SELECT pp.peso FROM tbPesoPet pp INNER JOIN tbPesoPetCuidador ppc ON pp.idPesoPet = ppc.idPesoPet INNER JOIN tbcuidador c ON ppc.idCuidador = c.idCuidador WHERE pp.peso = '3-5kg' AND c.nomeCuidador = 'Marcia Maia';
                                    ");
                                    // echo mysqli_num_rows($result) . "<br>";
                                    for($i = 0; $i < mysqli_num_rows($result); $i++){
                                        // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                    }
                                    if(mysqli_num_rows($result) == 0){
                                        echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                    } else {
                                        echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                    }
                                ?>
                            </p>
                        </div>
                        <div>
                            <img src="../../img/+25kg-removebg-preview.png" alt="">
                            <p>6-10kg</p>
                            <p>
                                <?php
                                    $result = mysqli_query($conexao, "SELECT pp.peso FROM tbPesoPet pp INNER JOIN tbPesoPetCuidador ppc ON pp.idPesoPet = ppc.idPesoPet INNER JOIN tbcuidador c ON ppc.idCuidador = c.idCuidador WHERE pp.peso = '6-10kg' AND c.nomeCuidador = 'Marcia Maia';
                                    ");
                                    // echo mysqli_num_rows($result) . "<br>";
                                    for($i = 0; $i < mysqli_num_rows($result); $i++){
                                        // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                    }
                                    if(mysqli_num_rows($result) == 0){
                                        echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                    } else {
                                        echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                    }
                                ?>
                            </p>
                        </div>
                        <div>
                            <img src="../../img/até_25kg-removebg-preview.png" alt="">
                            <p>11-20kg</p>
                            <p>
                                <?php
                                    $result = mysqli_query($conexao, "SELECT pp.peso FROM tbPesoPet pp INNER JOIN tbPesoPetCuidador ppc ON pp.idPesoPet = ppc.idPesoPet INNER JOIN tbcuidador c ON ppc.idCuidador = c.idCuidador WHERE pp.peso = '11-20kg' AND c.nomeCuidador = 'Marcia Maia';
                                    ");
                                    // echo mysqli_num_rows($result) . "<br>";
                                    for($i = 0; $i < mysqli_num_rows($result); $i++){
                                        // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                    }
                                    if(mysqli_num_rows($result) == 0){
                                        echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                    } else {
                                        echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                    }
                                ?>
                            </p>
                        </div>
                        <div>
                            <img src="../../img/+_40kg-removebg-preview.png" alt="">
                            <p>+21kg</p>
                            <p>
                                <?php
                                    $result = mysqli_query($conexao, "SELECT pp.peso FROM tbPesoPet pp INNER JOIN tbPesoPetCuidador ppc ON pp.idPesoPet = ppc.idPesoPet INNER JOIN tbcuidador c ON ppc.idCuidador = c.idCuidador WHERE pp.peso = '+21kg' AND c.nomeCuidador = 'Marcia Maia';
                                    ");
                                    // echo mysqli_num_rows($result) . "<br>";
                                    for($i = 0; $i < mysqli_num_rows($result); $i++){
                                        // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                    }
                                    if(mysqli_num_rows($result) == 0){
                                        echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                    } else {
                                        echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="information">
                    <div>
                        <h2>Pets que aceito</h2>
                    </div>
                    <div class="information-pets">
                        <div>
                            <img src="../../img/gato.png" alt="">
                            <p>Gato(a)</p>
                                <p>
                                    <?php
                                        $result = mysqli_query($conexao, "SELECT tp.tipoPet FROM tbTipoPet tp INNER JOIN tbcuidador c ON tp.idCuidador = c.idCuidador WHERE tp.tipoPet = 'gata' || tp.tipopet = 'gato' AND c.nomeCuidador = 'Marcia Maia';
                                        ");
                                        // echo mysqli_num_rows($result) . "<br>";
                                        for($i = 0; $i < mysqli_num_rows($result); $i++){
                                            // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                        }
                                        if(mysqli_num_rows($result) == 0){
                                            echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                        } else {
                                            echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                        }
                                    ?>
                                </p>
                        </div>
                        <div>
                            <img src="../../img/até_10kg-removebg-preview (1).png" alt="">
                            <p>3-5kg</p>
                            <p>
                                <?php
                                    $result = mysqli_query($conexao, "SELECT pp.peso FROM tbPesoPet pp INNER JOIN tbPesoPetCuidador ppc ON pp.idPesoPet = ppc.idPesoPet INNER JOIN tbcuidador c ON ppc.idCuidador = c.idCuidador WHERE pp.peso = '3-5kg' AND c.nomeCuidador = 'Marcia Maia';
                                    ");
                                    // echo mysqli_num_rows($result) . "<br>";
                                    for($i = 0; $i < mysqli_num_rows($result); $i++){
                                        // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                    }
                                    if(mysqli_num_rows($result) == 0){
                                        echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                    } else {
                                        echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                    }
                                ?>
                            </p>
                        </div>
                        <div>
                            <img src="../../img/+25kg-removebg-preview.png" alt="">
                            <p>6-10kg</p>
                            <p>
                                <?php
                                    $result = mysqli_query($conexao, "SELECT pp.peso FROM tbPesoPet pp INNER JOIN tbPesoPetCuidador ppc ON pp.idPesoPet = ppc.idPesoPet INNER JOIN tbcuidador c ON ppc.idCuidador = c.idCuidador WHERE pp.peso = '6-10kg' AND c.nomeCuidador = 'Marcia Maia';
                                    ");
                                    // echo mysqli_num_rows($result) . "<br>";
                                    for($i = 0; $i < mysqli_num_rows($result); $i++){
                                        // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                    }
                                    if(mysqli_num_rows($result) == 0){
                                        echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                    } else {
                                        echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                    }
                                ?>
                            </p>
                        </div>
                        <div>
                            <img src="../../img/até_25kg-removebg-preview.png" alt="">
                            <p>11-20kg</p>
                            <p>
                                <?php
                                    $result = mysqli_query($conexao, "SELECT pp.peso FROM tbPesoPet pp INNER JOIN tbPesoPetCuidador ppc ON pp.idPesoPet = ppc.idPesoPet INNER JOIN tbcuidador c ON ppc.idCuidador = c.idCuidador WHERE pp.peso = '11-20kg' AND c.nomeCuidador = 'Marcia Maia';
                                    ");
                                    // echo mysqli_num_rows($result) . "<br>";
                                    for($i = 0; $i < mysqli_num_rows($result); $i++){
                                        // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                    }
                                    if(mysqli_num_rows($result) == 0){
                                        echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                    } else {
                                        echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                    }
                                ?>
                            </p>
                        </div>
                        <div>
                            <img src="../../img/+_40kg-removebg-preview.png" alt="">
                            <p>+21kg</p>
                            <p>
                                <?php
                                    $result = mysqli_query($conexao, "SELECT pp.peso FROM tbPesoPet pp INNER JOIN tbPesoPetCuidador ppc ON pp.idPesoPet = ppc.idPesoPet INNER JOIN tbcuidador c ON ppc.idCuidador = c.idCuidador WHERE pp.peso = '+21kg' AND c.nomeCuidador = 'Marcia Maia';
                                    ");
                                    // echo mysqli_num_rows($result) . "<br>";
                                    for($i = 0; $i < mysqli_num_rows($result); $i++){
                                        // echo mysqli_fetch_assoc($result)['tipoPet'] . "<br>";
                                    }
                                    if(mysqli_num_rows($result) == 0){
                                        echo "<p style='color:black;background-color:red;border-radius:20px;padding:2px'>" . "Não Aceito" . "</p>";
                                    } else {
                                        echo "<p style='color:black;background-color:#41fa13;border-radius:4px;padding:2px'>" . "Aceito" . "</p>";
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div> -->
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