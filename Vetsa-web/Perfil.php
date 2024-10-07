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

        .foco {
            color: #69F5B2;
            /* cor do texto em foco */
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

        .align {
            text-align: left;
        }
    </style>

    <title>Perfil</title>
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

    <div class="container content">
        <div class="row">
            <div class="col-md-7 d-flex align-items-center justify-content-center">
                <img src="imgs/imagemperfil.png" alt="imagem perfil" class="img-fluid" style="width: 50%; height: auto; margin-right: 200px;">
            </div>
            <div class="col-md-5" style="margin-left: -150px;">
                <h1 class="text-center foco">Perfil</h1>
                <p class="text-center">Código do cliente: 1</p>
                <p class="text-center">Nome: Pedro Henrique Ferreira</p>
                <p class="text-center">Telefone: (11)9123-4567</p>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-custom">Vamos agendar?</button>
                </div>
            </div>
        </div>
    </div>

    &nbsp;

    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Espécie</th>
                    <th>Gênero</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ravena</td>
                    <td>Gato</td>
                    <td>Feminino</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
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