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
                <div class="linha  u-margin-bottom-grande">
                <div class="col-1-de-2 txt-esq1">
                    <input value="{{$carro->id}}"type="hidden"/>
                    <h3 class="texto-terciario">{{$modelo->nome_modelo}}</h3>
                    <span>{{$marca->nome_marca}}</span>
                    <span>Preto</span>
                    <span >{{$localizacao->nome_bairro}} </span>
                    <span>{{$carro->preco}},00kz</span>
                    <span>{{$carro->matricula}}</span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa ipsam provident ipsum. At aut consequatur, incidunt nesciunt praesentium nisi? Voluptatum eveniet ad suscipit exercitationem maiores laudantium quis possimus similique sapiente?</p>
                   <form action="{{route('infor.store')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$carro->id}}" name="id" id="id" />
                    @if($valor!=0)
                        <button type="submit" class="btn btn-inn">
                            Interessado
                        </button>
                        @else
                        <h2 class="btn btn-inn">Esperando a resposta</h2>
                    @endif
                    
                </form>
                </div>
                <div class="col-1-de-2">
                    <div class="img-desc">
                        @foreach ($imagem as $images)
                            <img src="{{env('APP_URL')}}storage/{{$images->imagem}}" alt="">
                        @endforeach
                  
                    </div>
                </div>
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