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
    </style>

    <title>Home</title>
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


    <div class="container content">
        <div class="row">
            <div class="col-md-5">
                <h1 class="text-center">Procurando um bom veterinário?</h1>
                <p class="text-center">
                    Na <span class="foco">Vetsa</span>, acreditamos que o cuidado vai além do atendimento médico — envolve <span class="foco">carinho, dedicação
                        e um compromisso constante com o bem-estar de cada paciente</span>. Com uma equipe de veterinários altamente qualificada
                    e apaixonada pelo que faz, nossa clínica se dedica a oferecer um serviço de excelência, sempre pautado no <span class="foco">respeito</span>
                    e na <span class="foco">atenção individualizada para cada animal</span>.
                </p>
            </div>
            <div class="col-md-7 d-flex align-items-center justify-content-center">
                <img src="imgs/cachorro.png" alt="imagem 1" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>

        &nbsp;

        <div class="container content">
            <div class="row">
                <div class="col-md-7 d-flex align-items-center justify-content-center">
                    <img src="imgs/cachorroegato.png" alt="imagem1" class="img-fluid" style="width: 50%; height: auto; margin-right: 200px;">
                </div>
                <div class="col-md-5" style="margin-left: -150px;">
                    <h1 class="text-center">Agende sua consulta!</h1>
                    <p class="text-center">
                        Na <span class="foco">Vetsa</span>, o processo de agendamento é <span class="foco">simples e conveniente</span>. Com o nosso sistema de agendamento,
                        você pode escolher o melhor horário para trazer seu pet, garantindo um atendimento rápido e eficiente. Estamos à sua disposição <span class="foco">24
                            horas por dia</span>, então <span class="foco">não se preocupe com a hora</span> — sempre estaremos prontos para cuidar do seu pet, seja para consultas
                        de rotina ou emergências. E mais! Aproveite nossos <span class="foco">descontos em horários selecionados</span> para <span class="foco">economizar</span>
                        ainda <span class="foco">mais</span>, sem abrir mão da qualidade. <span class="foco">Agende</span> agora e ofereça ao seu pet o cuidado que ele merece!
                    </p>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-custom">Vamos agendar?</button>
                    </div>
                </div>
            </div>

            &nbsp;

            <div class="d-flex flex-column justify-content-center align-items-center full-height">
                <h1>Conheça nossa equipe!</h1>
                <p>
                    Somos uma veterinária focada em <span class="foco">atender o seu amigo animal</span>, nossa <span class="foco">capacitada</span> equipe está a postos para cuidar dele
                </p>
            </div>

            &nbsp;

            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="imgs/vet1.png" alt="Imagem veterinário" class="img-fluid">
                        <p class="foco">Rafael Almeida Zá</p>
                    </div>
                    <div class="col-md-4">
                        <img src="imgs/vet2.png" alt="Imagem veterinário" class="img-fluid">
                        <p class="foco">Juliana Lima Carvalho</p>
                    </div>
                    <div class="col-md-4">
                        <img src="imgs/vet3.png" alt="Imagem veterinário" class="img-fluid">
                        <p class="foco">André Café Ferreira</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    &nbsp;

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