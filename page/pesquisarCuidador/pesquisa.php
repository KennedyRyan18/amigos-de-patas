<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Cuidadores</title>

    <link rel="stylesheet" href="pesquisa.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon-16x16.png">


</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="../../index.php">
                <img class="logo" src="../../img/logo.png" alt="" width="140" height="100">
                </a>
            </div>
        </nav>
    </header>
    <main>
        <article>
            <section>
                <div class="container-perfil">
                    <div class="title-cuidador">
                        <h1>Encontre o seu Amigo de Patas</h1>
                    </div>
                    <div class="information">
                        <div>
                            <img class="foto-perfile" src="https://images.pexels.com/photos/8498533/pexels-photo-8498533.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="" srcset="">
                        </div>
                        <div class="informatio-name">
                            <h2>Nome:
                                <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Nome_Cuidador` FROM `cuidador` WHERE `Cod_cuidador` = 2");
                                    echo mysqli_fetch_assoc($result)['Nome_Cuidador'];
                                ?>
                            </h2>
                            <span>Amor puro e verdadeiro se manifesta nos animais!</span>
                            <p>Bairro:
                                <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Bairro` FROM `cuidador` WHERE `Cod_cuidador` = 2");
                                    echo mysqli_fetch_assoc($result)['Bairro'];
                                ?>
                            </p>
                        </div>
                        <div class="information-value">
                            <h2 class="text-passeio">Passeio:
                                <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Valor_servico` FROM `servico` WHERE `Cod_servico` = 2");
                                    echo mysqli_fetch_assoc($result)['Valor_servico'];
                                ?>
                            </h2>
                            <span class="span">Por hora</span>
                            <div class="informatio-button">
                                <a class="btn btn-primary" href="../../page/perfilCuidador/perfil02.php">Ver o Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container-perfil">
                    <div class="information">
                        <div>
                            <img class="foto-perfile" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" srcset="">
                        </div>
                        <div class="informatio-name">
                            <h2>Nome:
                                <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Nome_Cuidador` FROM `cuidador` WHERE `Cod_cuidador` = 1");
                                    echo mysqli_fetch_assoc($result)['Nome_Cuidador'];
                                ?>
                            </h2>
                            <span>Traga o seu pet, para que possa cuidar dele!</span>
                            <p>Bairro:
                                <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Bairro` FROM `cuidador` WHERE `Cod_cuidador` = 1");
                                    echo mysqli_fetch_assoc($result)['Bairro'];
                                ?>
                            </p>
                        </div>
                        <div class="information-value">
                            <h2 class="text-passeio">Passeio:
                                <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Valor_servico` FROM `servico` WHERE `Cod_servico` = 2");
                                    echo mysqli_fetch_assoc($result)['Valor_servico'];
                                ?>
                                <span class="span">Por hora</span>
                            </h2>
                            <h2 class="text-hospedagem">Hospedagem:
                                <?php
                                    include_once('../../db/conexao.php');

                                    $result = mysqli_query($conexao, "SELECT `Valor_servico` FROM `servico` WHERE `Cod_servico` = 1");
                                    echo mysqli_fetch_assoc($result)['Valor_servico'];
                                ?>
                                <span class="span">Por dia</span>
                            </h2>
                            <div class="informatio-button">
                                <a class="btn btn-primary" href="../../page/perfilCuidador/perfil01.php">Ver o Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <footer>
        <p>
            Desenvolido pelo Time de TEIT - Projeto <a href="https://trello.com/b/lPRcZjWK/amigodepatas" target="_blank">Amigo de Patas</a>
        </p>
    </footer>
</body>
</html>