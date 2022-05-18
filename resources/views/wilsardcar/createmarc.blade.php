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
            <div class="navbar-menu">
                <div class="cabecalho__caixa-logo">
                    <img src="{{env('APP_URL')}}storage/img/wilsardlogo1.png" alt="Logo" class="cabecalho__logo">
                </div>
                <nav class="nav-area">
                    <ul class="listacab">
                        <li class="lista__item"><a href="{{route('home')}}" class="lista__item--link">Início</a></li>
                        <li class="lista__item"><a href="" class="lista__item--link">Sobre</a></li>
                    </ul>
                </nav>
            </div>
            <div class="cabeca-textol">
                <span class="letra-verdel"> WILSARD INVESTMENTS </span>
                <section class="sectionl">
                    <h1> Faça o seu Login</h1>
                    <div class="notifiesl">
                        <form method="post" action="{{route('create.store')}}"class="fiftyl">
                           @csrf
                            <div class="txtdiv">
                                <input type="text" class="txt-email " name="nome" id="nome" placeholder="Nome">
                                <input type="email" class="txt-email " name="email" id="email" placeholder="E-mail">
                                <input type="password" class="txt-email" name="senha" id="senha" placeholder="Palavra-Passe">
                                <input type="date"  name="data" class="txt-email " id="data" placeholder="Data de nascimento">
                                <select name="sexo" class="txt-email " id="sexo">
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                                <input type="text" class="txt-email " name="telefone" id="telefone" placeholder="Número de telefone">
                            </div>
                            <div class="btndiv wh">
                                <input onclick="window.location.href='gestor.html'" type="submit" class="btn-login" value="LOGIN">
                            </div>
                        </form>    
                          </div>
                </section>
            </div>
        <div class="d">                
            <p>&copy; 2021 Wilsard-Investment. &prod; Delta.rts. Todos os direitos reservados</p>
        </div>
    </body>
</html>