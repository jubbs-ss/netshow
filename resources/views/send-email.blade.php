<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Autorola Locadora de veículos.</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{ env('APP_URL') }}/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}/css/style.css" rel="stylesheet">
    <style>
        .titleEmail p{
            color: #333 !important;
        }
        .inputgrey{
            background-color: #b7b7b7
        }
        .linksac h5{
            color: #005faf;
        }
        .isblack{
            color: #333;
        }
        .isblack a{
            color: #333;
        }
    </style>
</head>

<body>

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="{{ env('APP_URL') }}/images/logof.png">
                </div>
            </div>
        </div>
    </section>
    <section class="py-3" style="background-color: #005faf">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 style="color: #FFF">MEU FLEET</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 my-5 text-center">
                    <h3>Deseja renovar seu contrato?</h3>
                    <h5>Preencha o formulário abaixo,e aguarde nosso retorno</h5>
                </div>
            </div>
            <form action="{{route('requisicao')}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-1 titleEmail">
                        <p>Contrato:</p>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="contrato" class="form-control inputgrey">
                    </div>
                    <div class="col-sm-1 titleEmail">
                        <p>Placa:</p>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="placa" class="form-control inputgrey">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-1 titleEmail">
                        <p>CPF/CNPJ:</p>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="cpf_cnpj" class="form-control inputgrey">
                    </div>
                    <div class="col-sm-1 titleEmail">
                        <p>Nome:</p>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="nome" class="form-control inputgrey">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-1 titleEmail">
                        <p>Telefone:</p>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="telefone" class="form-control inputgrey">
                    </div>
                    <div class="col-sm-1 titleEmail">
                        <p>WhatsApp:</p>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="whatsapp" class="form-control inputgrey">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-1 titleEmail">
                        <p>Email:</p>
                    </div>
                    <div class="col-sm-11">
                        <input type="text" name="email" class="form-control inputgrey">
                    </div>
                    <div class="col-sm-12 text-right">
                        <input type="submit" class="btn btn-success" value="Enviar agora">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="py-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 mx-auto">
                    <div class="row">
                        <div class="col linksac">
                            <h5>INSTITUCIONAL</h5>
                            <a href="">Quem Somos</a><br />
                            <a href="">Fleet News</a><br />
                            <a href="">Trabalhe Conosco</a>
                        </div>
                        <div class="col linksac">
                            <h5>PARA VOCÊ</h5>
                            <a href="">Carro por assinatura</a>
                        </div>
                        <div class="col linksac">
                            <h5>PARA SUA EMPRESA</h5>
                            <a href="">Automóveis</a><br />
                            <a href="">Caminhão</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href=""><img src="{{ env('APP_URL') }}/images/r1.png"></a>
                    <a href=""><img src="{{ env('APP_URL') }}/images/r2.png"></a>
                    <a href=""><img src="{{ env('APP_URL') }}/images/r3.png"></a>
                    <a href=""><img src="{{ env('APP_URL') }}/images/r4.png"></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-3 mt-5" style="background-color: #eaeeed">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 isblack text-center">
                    <a href="">Politica de Privacidade</a> |
                        <a href="">Politica de Cookies</a> |
                        <a href="">Código de conduta</a> |
                        <a href="">Canal de denúncia</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-center isblack">
                    <p><b>Fleet Solutions, todos os direitos reservados<br />Plataforma desenvolvida por NewTech Consultoria em Tecnologia</b></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

    <script src="./vendor/chartist/js/chartist.min.js"></script>

    <script src="./vendor/moment/moment.min.js"></script>
    <script src="./vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="./js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>
