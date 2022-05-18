<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{url(mix('wilsardcar/css/all.css'))}}">

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
        <link rel="shortcut icon" type="image/png" href="{{env('APP_URL')}}storage/img/favicon.png">
        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        
        <script language="JavaScript" type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script language="JavaScript" type="text/javascript" src="{{url(mix('wilsardcar/js/script.js'))}}"></script>
    </head>
    <body>
        <header class="cabeca">
            <div class="navbar">
                <a href="{{ route('home')}}"><img src="{{env('APP_URL')}}storage/img//wilsardlogo.png" alt="Logo" class="cabecalho__logo"></a>   
            </div>
            <nav class="nav-area1">
                <ul class="listmenu">
                    <li class="lista__item-menu">
                        <a href="{{route('gestao.user')}}"> 
                            Clientes
                        </a>
                    </li>
                    <li class="lista__item-menu">
                        <a href="{{route('gestao',0)}}">
                            Carros
                        </a>
                    </li>
                    <li class="lista__item-menu">
                        <a href="{{route('gestao.marca',0)}}">
                            Marcas
                        </a>
                    </li>
                    <li class="lista__item-menu">
                        <a href="{{route('gestao.modelo',0)}}">
                            Modelo
                        </a>
                    </li>
                    
                    <li class="lista__item-menu">Rent A Car
                        
                    </li>
                    
                    <li class="lista__item-menu">
                        <img src="{{env('APP_URL')}}storage/img/icons8_shopping_cart_100px.png" alt="Logo" class="levar">
                            <div class="menu-item">
                                <ul class="menu-item-ul">
                                    <li class="menu-item-li">
                                        <a href="#" class="cabeca-link" rel="" id="">Carros Vendidos</a>
                                    </li>
                                    <li class="menu-item-li">
                                        <a href="#" class="cabeca-link" rel="" id="">Carros Comprados</a>
                                    </li>
                                </ul>
                            </div>
                        
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
                <div class="tb">
                <h1 class="u-center-text">Interessados</h1>
                <table class="tabela">
                    <tbody>
                        <tr class="tli">
                            <td class="tcoluna">
                                Nome
                            </td>
                            <td class="tcoluna">
                                Número de telefone
                            </td>
                            <td class="tcoluna">
                                E-mail 
                            </td>
                            <td class="tcoluna">
                                Modelo 
                            </td>
                            <td class="tcoluna">
                                Cor
                            </td>
                            <td class="tcoluna">
                                Preço
                            </td>
                        </tr>

                        <!-- ----- Lista de nomes ----- -->
                       @foreach ($interesse as $interesses)
                            @foreach ($usuario as $usuarios)
                                @if($interesses->id_usuario==$usuarios->id)

                        <tr class="tlinha">
                            <td class="tcoluna">
                                {{$usuarios->nome}}
                            </td>
                            <td class="tcoluna">
                                {{$usuarios->telefone}}                                
                            </td>
                            <td class="tcoluna">
                                {{$usuarios->email}} 
                            </td>
                            @endif
                            @endforeach
                            @foreach ($carros as $carro)
                                @if($interesses->id_carro==$carro->id)
                           @foreach ($modelo as $modelos)
                               @if ($carro->id_modelo==$modelos->id)
                                    <td class="tcoluna">
                                        {{$modelos->nome_modelo}}
                                    </td>
                                @endif
                           @endforeach
                            <td class="tcoluna">
                                {{$carro->cor}}
                            </td>
                            <td class="tcoluna">
                                {{$carro->preco}}
                            </td>
                                @endif
                            @endforeach
                            <td class="">
                                <button class="btn btn-edit">
                                    <i class="far fa-edit" alt="Editar"></i>
                                </button>
                            </td>
                            <td class="">
                                <form action="{{route('gestao.user.delete',$interesses->id)}}" method="post">
                                    @csrf
                                    @method('DELETE');
                                    <button class="btn btn-trash">
                                        <i class="far fa-trash-alt" alt="eliminar"></i>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>    
                        @endforeach
                            
                    </tbody>
                </table>

                  
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
           <div class="foot-content">
            <div class="cre">
                <h2 class="text-label">Endereço</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, dolor. Mollitia sint soluta, quibusdam similique quidem aspernatur dolore, libero accusantium sunt praesentium quia iste illum, fugiat doloremque aut deleniti a.</p>
            </div>
            <div class="cre">
                <h2 class="text-label">Endereço</h2>
                <div class="pick">
                    <ul class="pe-lista1">
                        <li class="pe-item"><a class="pe-item--link" href="">Ajuda</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Termos de Untilização</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Políticas de Privacidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="cre">
                <h2 class="text-label">Endereço</h2>
                <div class="pick">
                    <ul class="pe-lista1">
                        <li class="pe-item"><a class="pe-item--link" href="">Ajuda</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Termos de Untilização</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Políticas de Privacidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="cre">
                <div class="pick">
                    <ul class="pe-lista1">
                        <li class="pe-item"><a class="pe-item--link" href="">Ajuda</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Termos de Untilização</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Políticas de Privacidade</a></li>
                    </ul>
                </div>
            </div>
           </div>
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