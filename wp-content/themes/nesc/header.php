<!doctype html>
<html lang="pt_BR">

<head>
    <meta charset="<?php bloginfo( 'UTF-8' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Núcleo de Estudos de Saúde Coletiva">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="wp-content/themes/nesc/js/controler.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
    <?php wp_head(); ?>
</head>

<body class="bggray">
    <!-- HEADER #####################################################################################################
    -->
    <div class="container-fluid" id="head">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-2">
                <a href="index.php"><img src="trunk/logo_min.png" alt="Nesc"></a>
            </div>
            <div class="col-xs-6 text-center">
                <a href="index.php"><h1 class="Nesctitulo roboto">Núcleo de Estudos em Saúde Coletiva</h1></a>
            </div>
            <div class="col-xs-2 col-xs-offset-1"><img src="trunk/ufpb.png" alt="UFPB"></div>
        </div>
    </div>

    <!-- MENU ##########################################################################################################
    -->
    <div class="container-fluid bgwhite box-shadow" id="menu">
        <div class="container">
            <div class="row roboto font15 text-center">
                <a href="#" class="scroll-link" data-id="quemsomos"><div class="menubotao">Quem Somos</div></a>
                <a href="#" class="scroll-link" data-id="noticias"><div class="menubotao">Notícias</div></a>
                    <div class="dropdown">
                        <button class="cursosbg menubotao dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="font-weight: normal">
                            Cursos
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu bgdarkblue" aria-labelledby="dropdowndomenu" id="menucaido">
                            <li class="bgdarkblue"><a href="#">Abertos</a></li>
                            <li class="bgbluehover"><a href="#">Andamento</a></li>
                            <li class="bgdarkblue"><a href="#">Concluídos</a></li>
                        </ul>
                    </div>
                <a href="#"><div class="menubotao">Agenda</div></a>
                <a href="#" class="scroll-link" data-id="contato"><div class="menubotao">Contato</div></a>

                    <div class="dropdown">
                        <button class="cursosbg menubotao dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Institucional
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu bgdarkblue" aria-labelledby="dropdowndomenu" id="menucaido2">
                            <li class="bgdarkblue"><a href="#">Biblioteca</a></li>
                            <li class="bgbluehover"><a href="#">Grupos de Trabalho</a></li>
                            <li class="bgdarkblue"><a href="#">Documentos</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>