<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php">
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script type="text/javascript">
        $(document).on('click', 'ul li', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>

    <script>
        document.getElementsByClassName()
    </script>

    <title>Agendamento</title>
</head>
<body>

    <header>
        <div class="logo">
            <h1>Amigo de Patas</h1>
        </div>
        
        <div class="Perfil">
            <div class="log">
                <h3 class="NomeProfile">Usuario</h3>        
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
            <h3>Encontre seu profissional aqui</h3>
            <h4>Qual serviço você deseja?</h4>

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

                <li>
                    <a href="#">
                        <div class="container3">
                            <img src="img/dogVeterinario.jpeg" width="120px">
                            <h2>Veterinário<h2>
                        </div>
                    </a>
                </li>

            </ul>

        </div>

        <div class="box2">
            <div class="pet">
                <h4>Qual é o seu pet?<h4>
                <select name="pets">
                    <option value="0"></option>
                    <option value="1">Gato</option>
                    <option value="2">Cachorro(até 10kg)</option>
                    <option value="3">Cachorro(até +10kg)</option>
                </select>
            </div>

            <a class="btn-buscar" href="#">
                <div>
                    <p>Buscar</p>
                </div>
            </a>
        </div>
        
    </main>
    
</body>
</html>