<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .navbar-custom {
            background-color: #69F5B2;
            border-bottom: 4px solid #FFFA84;
            /* classe para mudar as cores da navbar, usamos o fundo verde e uma linha amarela na parte de baixo*/
        }

        .navbar-custom .nav-link {
            color: whitesmoke;
            /* classe para mudar a cor dos itens da navbar */
        }

        .navbar-custom .nav-link:hover {
            color: #FFFA84;
            /* cor para mudar a cor dos itens na navbar ao passar o mouse em cima para amarelo */
        }

        .btn-custom {
            background-color: #69F5B2;
            color: white;
            border: none;
            /* estilização do botão */
        }

        .btn-custom:hover {
            background-color: #FFFA84;
            /* muda o botão para amarelo ao passar o mouse e seu texto fica preto */
        }

        .footer-custom {
            background-color: #69F5B2;
            padding: 20px;
            border-top: 4px solid #FFFA84;
            /* estilização do footer */
        }

        .footer-custom .footer-column {
            text-align: left;
            /* define as colunas no footer para os elementos ficarem a direita */
        }

        .footer-custom .footer-logo {
            text-align: left;
            /* define a logo para a direita */
        }

        .branco {
            color: whitesmoke;
        }

        .foco {
            color: #69F5B2;
            /* cor do texto em foco */
        }

        .rounded-input {
            border-radius: 20px;
            background-color: #E7E7E7;
            /* arredonda a borda do input e deixa ele cinza */
        }
    </style>

    <title>Editar</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#"><img src="imgs/logo.png" alt="Logo" height="50"></a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="CadastroConsulta.php">Agendamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Cadastro.php"><img src="imgs/perfil.png" alt="Perfil" height="25"></a>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <br>
    <br>

    <div class="container mt-4">
        <form method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control rounded-input" id="nome" name="nome">
            </div>
            <div class="form-group mt-4">
                <label for="especie">Espécie</label>
                <input type="text" class="form-control rounded-input" id="especie" name="especie">
            </div>
            <div class="form-group mt-4">
                <label for="raca">Raça</label>
                <input type="text" class="form-control rounded-input" id="raca" name="raca">
            </div>
            <div class="form-group mt-4">
                <label for="genero">Gênero</label>
                <input type="text" class="form-control rounded-input" id="genero" name="genero">
            </div>
            <div class="form-group mt-4">
                <label for="idade">Idade</label>
                <input type="number" class="form-control rounded-input" id="idade" name="idade">
            </div>
            <div class="form-group mt-4">
                <label for="cor">Cor</label>
                <input type="text" class="form-control rounded-input" id="cor" name="cor">
            </div>
            <div class="form-group mt-4">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-custom w-100">Editar</button>
                </div>
            </div>
        </form>
    </div>
    

    <br>
    <br>
    <br>


    <footer class="footer-custom">
        <div>
            <div class="row">
                <div class="col-md-4 footer-logo">
                    <img src="imgs/logo.png" alt="Logo" class="img-fluid" width="200">
                    <p class="branco">A Vetsa foi feita pra você e pro seu melhor amigo animal!</p>
                    <p class="branco">&copy; 2024 Vetsa. Todos os direitos reservados.</p>
                </div>

                <div class="col-md-4 footer-column branco">
                    <h5>Contato</h5>
                    <p>Vetsaofc@gmail.com</p>
                    <div>
                        <a href="#"><img src="imgs/redes.png" alt="Redes sociais" class="img-fluid" width="100"></a>
                    </div>
                </div>

                <div class="col-md-4 footer-column">
                    <h5 class="branco" id="sobre">Sobre</h5>
                    <p class="branco">Somos uma equipe dedicada a cuidar dos seus pets, venha visitar nossa unidade.</p>
                    <p class="branco">Rua xxxxxxxx 28</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>