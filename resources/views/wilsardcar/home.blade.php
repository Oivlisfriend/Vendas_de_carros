<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

        <title>Wilsard</title>

    </head>
    <body>
        <header class="cabecalho" style="background-image: url({{env('APP_URL')}}storage/img/newpg.png);">
            <div class="navbar-menu">
                <div class="cabecalho__caixa-logo">
                    <img src="{{env('APP_URL')}}storage/img/wilsardlogo1.png" alt="Logo" class="cabecalho__logo">
                </div>
                <nav class="nav-area">
                    <ul class="listacab">
                        <li class="lista__item"><a href="{{route('home')}}" class="lista__item--link">In??cio</a></li>
                        <li class="lista__item"><a href="{{route('carros',['cat'=>0])}}" class="lista__item--link">Carros</a></li>
                        <li class="lista__item"><a href="{{route('login')}}" class="lista__item--link">Login</a></li>
                        <li class="lista__item"><a href="" class="lista__item--link">Sobre</a></li>
                    </ul>
                    <!--label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label-->
                </nav>
            </div>
            <div class="cabeca-texto">
                <span class="letra-verde">Texto Por descri????o</span>
                <h1 class="texto-cabecalho">Titulo Categ??rico</h1>
                <button class="btn-stand btn">
                    Garagem
                </button>
            </div>
        </header>
        <section class="seccao-car">
            <div class="tituloprev">
                <h1 class="u-center-text">Sobre</h1>
            </div>
            <div class="linha">
                <div class="col-1-de-2 txt-esq">
                    <h3 class="texto-terciario">Text Tr??s</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa ipsam provident ipsum. At aut consequatur, incidunt nesciunt praesentium nisi? Voluptatum eveniet ad suscipit exercitationem maiores laudantium quis possimus similique sapiente?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro alias ullam eligendi quae provident non est velit? Sequi porro iure alias iusto mollitia excepturi, dicta, earum possimus cum molestiae dolorum.</p>
                    <h3 class="texto-terciario">Text Tr??s</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa ipsam provident ipsum. At aut consequatur, incidunt nesciunt praesentium nisi? Voluptatum eveniet ad suscipit exercitationem maiores laudantium quis possimus similique sapiente?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro alias ullam eligendi quae provident non est velit? Sequi porro iure alias iusto mollitia excepturi, dicta, earum possimus cum molestiae dolorum.</p>

                </div>
                <div class="col-1-de-2">
                    <div class="imagem-sobre">
                        <img src="{{env('APP_URL')}}storage/img/car-repair-362150_1920.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <main class="corpo">
            <section class="areamin">
                <div class="linha">
                    <div class="col-1-de-3">
                        <div class="area-tag">
                            <div class="ico-tag">
                                <img src="{{env('APP_URL')}}storage/img/icons/shopping_cart_100px.png" alt="">
                                <img src="{{env('APP_URL')}}storage/img/icons/tesla_model_s_100px.png" alt="" class="car">
                            </div>
                            <div class="type-tag">
                                <h1 class="title-tag">Compra</h1>
                                <p class="text-tag">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nesciunt quo quidem voluptate ipsa provident amet nihil distinctio quis consequatur sit, blanditiis esse reiciendis quos harum necessitatibus autem nam tenetur!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-de-3">
                        <div class="area-tag">
                            <div class="ico-tag">
                                <img src="{{env('APP_URL')}}storage/img/icons/price_tag_100px.png" alt="" class="price-tag">
                                <img src="{{env('APP_URL')}}storage/img/icons/tesla_model_s_100px.png" alt="" class="car">
                            </div>
                            <div class="type-tag">
                                <h1 class="title-tag">Venda</h1>
                                <p class="text-tag">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nesciunt quo quidem voluptate ipsa provident amet nihil distinctio quis consequatur sit, blanditiis esse reiciendis quos harum necessitatibus autem nam tenetur!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-de-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, aliquid ad, placeat velit at error fugiat voluptas alias iusto quia, nostrum doloremque expedita beatae! Esse, quae? Nisi officiis veniam dolor.</p>
                    </div>
                </div>     
            </section>

            <section class="section">
                <h1>Entrar Em Contacto</h1>
                <div class="notifies">
                    <div class="fifty">
                        <div class="txtdiv">
                            <input type="email" class="txt-nome" name="" id="" placeholder="Nome Completo">
                            <input type="email" class="txt-tel" name="" id="" placeholder="Telefone">
                            <input type="email" class="txt-email" name="" id="" placeholder="E-mail">
                            <textarea name="areatexto" id="" cols="30" class="txt-area" rows="7" placeholder="Assunto..."></textarea>
                        </div>
                        <div class="btndiv">
                            <input type="submit" class="btn-enviar" value="enviar">
                        </div>
                    </div>
                    <div class="fifty">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto architecto maxime at consectetur, dolores voluptatum veniam eius doloremque distinctio ullam quis accusantium nesciunt cumque. Architecto expedita saepe ex est tempora.</p>
                        <h4>Endere??o</h4>
                        <span>+244 999 999 999</span>
                        <h4>Telefone</h4>
                        <span>+244 999 999 999</span>
                        <h4>E-mail</h4>
                        <span>+244 999 999 999</span>
                    </div>
                </div>
            </section>
            <div class="bannerback-c">

            </div>
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
                <h2 class="text-label">Endere??o</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, dolor. Mollitia sint soluta, quibusdam similique quidem aspernatur dolore, libero accusantium sunt praesentium quia iste illum, fugiat doloremque aut deleniti a.</p>
            </div>
            <div class="cre">
                <h2 class="text-label">Endere??o</h2>
                <div class="pick">
                    <ul class="pe-lista1">
                        <li class="pe-item"><a class="pe-item--link" href="">Ajuda</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Termos de Untiliza????o</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Pol??ticas de Privacidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="cre">
                <h2 class="text-label">Redes Sociais</h2>
                <div class="pick">
                    <ul class="pe-lista1">
                        <li class="pe-item"><a class="pe-item--link" href="">Facebook</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="cre">
                <div class="pick">
                    <ul class="pe-lista1">
                        <li class="pe-item"><a class="pe-item--link" href="">Ajuda</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Termos de Untiliza????o</a></li>
                        <li class="pe-item"><a class="pe-item--link" href="">Pol??ticas de Privacidade</a></li>
                    </ul>
                </div>
            </div>
           </div>
            <div class="impressoes"></div>
            <div class="autoria">
                <p>&copy; 2021 Wilsard-Investment. &prod; Delta.rts. Todos os direitos reservados</p>
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