<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <Title>Wilsard-Investment</Title>
        <link rel="stylesheet" href="{{url(mix('wilsardcar/css/style.css'))}}">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        
        <script language="JavaScript" type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script language="JavaScript" type="text/javascript" src="js/listcod1.js"></script>
    </head>
    <body>
        <header class="cabeca">
            <div class="navbar">
                <a href="index.html"><img src="{{env('APP_URL')}}storage/img/wilsardlogo.png" alt="Logo" class="cabecalho__logo"></a>   
            </div>
            <nav class="nav-area1">
                <ul class="listmenu">
                    <li class="lista__item-menu">Comprar
                        <div class="menu-item">
                            <strong class="">Buscar carros</strong>
                            <ul class="menu-item-ul">
                                <li class="menu-item-li">
                                    <a href="{{route('carros',1)}}" class="cabeca-link" rel="" id="">Carros novos</a>
                                </li>
                                <li class="menu-item-li">
                                    <a href="{{route('carros',2)}}" class="cabeca-link" rel="" id="">Carros usados</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="lista__item-menu">Vender
                        <div class="menu-item">
                            <ul class="menu-item-ul">
                                <li class="menu-item-li">
                                    <a href="#" class="cabeca-link" rel="" id="">Meu carro</a>
                                </li>
                                <li class="menu-item-li">
                                    <a href="#" class="cabeca-link" rel="" id="">+ outro</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="lista__item-menu">Serviços
                        <div class="menu-item">
                            <strong class=""></strong>
                            <ul class="menu-item-ul">
                                <li class="menu-item-li">
                                    <a href="#" class="cabeca-link" rel="" id="">Anúncios</a>
                                </li>
                                <li class="menu-item-li">
                                    <a href="#" class="cabeca-link" rel="" id="">+ outro</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="lista__item-menu">Rent A Car
                        <div class="menu-item">
                            <strong class=""></strong>
                            <ul class="menu-item-ul">
                                <li class="menu-item-li">
                                    <a href="#" class="cabeca-link" rel="" id="">Alugar</a>
                                </li>
                                <li class="menu-item-li">
                                    <a href="#" class="cabeca-link" rel="" id="">+ outro</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="lista__item-menu">
                        <img src="{{env('APP_URL')}}storage/img/icons8_shopping_cart_100px.png" alt="Logo" class="levar">
                    </li>
                </ul>
                <div class="searchbar">
                    <input type="text" name="" id="" class="searchtxt">
                    <button class="btn btn-pesquisa">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </nav>
            
        </header>
           
        <main class="corpo">
            <div class="bannerback">

            </div>
            <div class="banner-top">
                <div class="panel-branco">
                    <div class="bar">
                        <div class="navbar-content">
                            <div class="navbar-item">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="areamin1">
                <div class="tituloprev">
                    <h1 class="u-center-text">Destaques</h1>
                </div>
                <div class="linha">
                    
                    @foreach ($car as $cars)
                <a href="{{route('infor',['carro'=>$cars->id])}}" >
                    
                    <div class="col-1-de-4 u-margin-bottom-grande">
                        <div class="cartaoproduto">
                            <img src="{{env('APP_URL')}}storage/{{$cars->imagem}}" alt="" class="imgcard">
                            <div class="infocard">
                                @foreach ($modelo as $modelos )
                                    @if($modelos->id==$cars->id_modelo)
                                        @foreach($marca as $marcas)
                                            @if($marcas->id==$modelos->id_marca)
                                                <span class="marca">{{$marcas->nome_marca}}</span>
                                                <span class="modelo">{{$modelos->nome_modelo}}</span>
                                                <p class="descricao">{{$cars->descricao}}</p>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                            <div class="outros">
                                <label for="" class="cor">
                                    <span class="text-c">
                                        {{$cars->cor}}
                                    </span>
                                    <span class="text-b">
                                        Cor
                                    </span>
                                </label>
                                <label for="" class="">
                                    <span class="text-c">
                                    {{$cars->preco}} kz.
                                    </span>
                                    <span class="text-b">
                                        preço
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </a>
                    @endforeach
                     
                </div> 
            </section>
            <div class="banner-top-b">
                <div class="panel-branco-b">
                    <div class="bar">
                        <div class="navbar-content">
                            <div class="navbar-item">
                                <marquee behavior="" direction="left">Wilsard-Investment.    &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Publicidade.   Wilsard-Investment.    &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Publicidade.
                                    Wilsard-Investment.  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  Publicidade.
                                    Wilsard-Investment.  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;   Publicidade.
                                </marquee>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bannerback-b">

            </div>
        </main>
        <footer class="rodape">
            <div class="impressoes"></div>
            <div class="autoria">
                <p>&copy; 2020 Wilsard-Investment. &prod; Delta.rts. Todos os direitos reservados</p>
            </div>
        </footer>
        <!--
    <section class='seccao1'>
        <div class="linha">
            <div class="col-1-de-2">
                col 1 de 2
            </div>
            <div class="col-2-de-2">
                col 2 de 2
            </div>
        </div>

        <div class="linha">
            <div class="col-1-de-3">
                col 1 de 3
            </div>
            <div class="col-2-de-3">
                col 2 de 3
            </div>
            <div class="col-3-de-3">
                col 3 de 3
            </div>
        </div>

        <div class="linha">
            <div class="col-1-de-3">
                col 1 de 3
            </div>
            <div class="col-2-de-3">
                col 2 de 3
            </div>
        </div>

        <div class="linha">
            <div class="col-1-de-4">
                col 1 de 4
            </div>
            <div class="col-1-de-4">
                col 1 de 4
            </div>
            <div class="col-1-de-4">
                col 1 de 4
            </div>
            <div class="col-1-de-4">
                col 1 de 4
            </div>
        </div>

        <div class="linha">
            <div class="col-1-de-4">
                col 1 de 4
            </div>
            <div class="col-1-de-4">
                col 1 de 4
            </div>
            <div class="col-2-de-4">
                col 2 de 4
            </div>
        </div>

        <div class="linha">
            <div class="col-1-de-4">
                col 1 de 4
            </div>
            <div class="col-3-de-4">
                col 3 de 4
            </div>
        </div>
    </section>
-->

    </body>
</html>