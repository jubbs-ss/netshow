<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>FLEXSOLUTIONS BRASIL - GERENCIAMENTO DE CONTRATOS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ env('APP_URL') }}/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ env('APP_URL') }}/css/style.css" rel="stylesheet">
    <style>
        .nav-header .brand-title {
            margin-left: 15px;
            max-width: 200px;
        }
        </style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">

                <img class="brand-title" src="{{ env('APP_URL') }}/images/logof.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        {{-- <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('register') }}" class="dropdown-item">
                                            <i class="icon-envelope-open"></i>
                                            <span class="ml-2">Cadastre-se </span>
                                        </a>
                                        <a href="{{ route('login') }}" class="dropdown-item">
                                            <i class="icon-user"></i>
                                            <span class="ml-2">Login </span>
                                        </a>
                                        <a href="{{ route('register') }}" class="dropdown-item">
                                            <i class="icon-envelope-open"></i>
                                            <span class="ml-2"> </span>
                                        </a>



                                </div>
                            </li>
                        </ul> --}}
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->


                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Cotações</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ env('APP_URL') }}/upload">Subir planilha</a></li>
                            <li><a href="{{ route('cotacoes') }}">Ver minhas cotações</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>© 2021 FLEXSOLUTIONS BRASIL - GERENCIAMENTO DE CONTRATOS. Desenvolvido NewTech Consultoria em Tecnologia</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <h4>Faça sua anotação no campo abaixo.</h4>
                <hr />

              <form action="{{route('historico')}}" method="POST">
                @csrf
                <textarea name="msg_alteracao" class="form-control" placeholder="Escreva aqui o que deseja."></textarea>
                <input type="hidden" name="historico_anotacao" id="historico_anotacao">
                <hr />
                <button type="submit" class="btn btn-secondary" >Salvar anotação</button>
              </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>

          </div>
        </div>
      </div>
    <script src="{{ env('APP_URL') }}/vendor/global/global.min.js"></script>
    <script src="{{ env('APP_URL') }}/js/quixnav-init.js"></script>
    <script src="{{ env('APP_URL') }}/js/jquery.printelement.js"></script>
    <script src="{{ env('APP_URL') }}/js/custom.min.js"></script>


    <script src="{{ env('APP_URL') }}/vendor/moment/moment.min.js"></script>



    <!-- Circle progress -->
        <script>
            function PrintDiv(div)
            {
                $('#'+div).printElement();
            }
            function validaBusca(elemento)
            {
                if($(elemento).val() == 'status')
                {

                    $('#trocaModo').html('<select class="form-control" onchange="validaBusca()" name="valor">\
                                <option value="1">Vigente</option>\
                                <option value="2">Aguardando extensão</option>\
                                <option value="3">Aguardando renovação</option>\
                                <option value="4">Aguardando ligação</option>\
                                <option value="5">Aguardando venda</option>\
                                <option value="6">Aguardando desmobilização</option>\
                                <option value="7">Finalizado</option>\
                            </select>');
                }
                else{

                    $('#trocaModo').html('<input type="text" class="form-control" placeholder="Digite o termo para sua busca" name="valor">');
                }
            }
        </script>
</body>

</html>


