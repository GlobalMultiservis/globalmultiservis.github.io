<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->

    <title>Global Multiservis</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />

    <!-- Font Awesome -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300,300italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Material Design Bootstrap -->
    <link href="css/materialize.css" rel="stylesheet">

    <!-- Magnific-popup css -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <!--<link href="css/progressbar.css" rel="stylesheet">-->
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">



    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' type='text/css'>
    <link rel="stylesheet" href="css/edslider.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate-custom.css">

</head>

<body data-spy="scroll" data-target=".navbar-desktop">
    <!-- Start your project here-->
    <!--Navbar-->
    <div class='preloader'><div class='loaded'>&nbsp;</div></div>
    <nav class="navbar navbar-fixed-top navbar-light bg-faded">
        <!--Collapse button-->
        <div class="container">
            <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="fa fa-bars black-text"></i></a>
            <!--Content for large and medium screens-->
            <div class="nav navbar-nav">
                <!--Navbar Brand-->
                <a class="navbar-brand no-margin" href="#home"><img id="multiservis-logo" src="img/logo.png" alt="" /></a>
                <!--Links-->
                <ul class="nav navbar-nav pull-right hidden-md-down text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plantas">Plantas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#works">Contáctenos</a>
                    </li>
                </ul>
            </div>
            <!-- Content for mobile devices-->
            <div class="navbar-mobile">
                <ul class="side-nav center overline-menu" id="mobile-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plantas">Plantas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#works">Contáctenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->
    <div id="home">
        <div class="container containerC">
            <ul class="mySlideshow heightCarousel">
                <li class="first textCar heightCarousel">
                    <div class="col-xs-12">
                        <a class="animated fadeInLeft">
                            <img src="img/hd-logo.png" class="img-fluid centro" alt="Global Multiservis">
                        </a>

                    </div>

                </li>
                <li class="second textCar heightCarousel">
                    <div class="animated fadeInRight textCarousel">Fabricación y mantenimiento de plantas para el tratamiento de aguas.</div>
                </li>
                <li class="third textCar heightCarousel">
                    <div class="animated fadeInRight textCarousel">Lo hacemos simple y seguro.</div>
                </li>
            </ul>
        </div>
    </div>
    <section id="about" class="about">
        <div class="main_joinus_area m-y-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_joinus_content center white-text wow fadeInUp">
                            <img src="img/logoC.png" class="img-fluid centro" alt="Global Multiservis">
                            <!-- <img src="img/logoC.png" alt="" /> -->
                            <h2 class="text-uppercase m-b-3">Nosotros</h2>
                            <p>
                                Somos una empresa que se especializa en el manejo de la fibra de vidrio, con una trayectoria de más
                                de 20 años de experiencia en la industria de la fabricación y el mantenimiento de plantas para el tratamiento
                                de agua,  5 años como empresa constituida, lo cual nos ha permitido mantenernos vigentes en el mercado.
                                Nuestro equipo de trabajo cuenta con amplia experiencia en área  y utilizamos los mejores materiales en los procesos de producción para la
                                elaboración de nuestros productos garantizando así que tengan una larga vida útil y la
                                mejor calidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </section> <!-- End of JoinUs section -->
    <section id="service" class="portfolio">
        <div class="container">
            <hr />
            <div class="row">
                <div class="main_portfolio_area m-y-3">
                    <div class="head_title center wow fadeInUp">
                        <h2>Productos y servicios</h2>
                        <p>
                            Fabricamos plantas de tratamiento de aguas potables compactas semicompactas, residuales compactas, semicompactas aeróbicas
                            ,anaeróbicas tanques de almacenamiento de 1.000 m3 hasta 400.000m3, todo lo relacionado con tratamiento de aguas y mantenimientos
                            de plantas y instalación, tarros de aireacción, tuberias en  PRFV de 12” hasta 24”, tambíen fabricamos módulos de sedimentación.
                        </p>
                    </div>
                    <div class="main_portfolio_content center wow fadeInUp">
                        <div class="main_mix_menu m-y-2">
                            <ul class="text-uppercase">
                                <li class="filter" data-filter="all">Todos</li>
                                <li class="filter" data-filter=".cat1">Tanques</li>
                                <li class="filter" data-filter=".cat2">Piscinas</li>
                                <li class="filter" data-filter=".cat3">Torres Aireación</li>
                            </ul>
                        </div>
                        <div id="mixcontent" class="mixcontent  wow zoomIn">
                            <div class="row">
                                <div class="col-md-4 mix cat1">
                                    <div class="single_mixi_portfolio center">
                                        <div class="single_portfolio_img">
                                            <img src="img/tanque.jpg" alt="" />
                                            <div class="mixi_portfolio_overlay">
                                                <a href="img/tanque.jpg" class="gallery-img"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="single_portfolio_text">
                                            <h3>Tanques de almacenamiento</h3>
                                            <p>Tanques de almacenamiento de agua</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mix cat2">
                                    <div class="single_mixi_portfolio center">
                                        <div class="single_portfolio_img">
                                            <img src="img/piscina2.jpg" alt="" />
                                            <div class="mixi_portfolio_overlay">
                                                <a href="img/piscina2.jpg" class="gallery-img"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="single_portfolio_text">
                                            <h3>Piscinas</h3>
                                            <p>Piscinas en fibra de vidrio sobre medida</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mix cat1">
                                    <div class="single_mixi_portfolio center">
                                        <div class="single_portfolio_img">
                                            <img src="img/planta_potable.jpg" alt="" />
                                            <div class="mixi_portfolio_overlay">
                                                <a href="img/planta_potable.jpg" class="gallery-img"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="single_portfolio_text">
                                            <h3>Tanques de almacenamiento</h3>
                                            <p>Distribuidor planta potable compacta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mix cat1">
                                    <div class="single_mixi_portfolio center">
                                        <div class="single_portfolio_img">
                                            <img src="img/enrollado_tanque.jpg" alt="" />
                                            <div class="mixi_portfolio_overlay">
                                                <a href="img/enrollado_tanque.jpg" class="gallery-img"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="single_portfolio_text">
                                            <h3>Tanques de almacenamiento</h3>
                                            <p>Enrollado de tanque</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mix cat2">
                                    <div class="single_mixi_portfolio center">
                                        <div class="single_portfolio_img">
                                            <img src="img/piscina.jpg" alt="" />
                                            <div class="mixi_portfolio_overlay">
                                                <a href="img/piscina.jpg" class="gallery-img"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="single_portfolio_text">
                                            <h3>Piscinas</h3>
                                            <p>Piscinas en fibra de vidrio sobre medida</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mix cat3">
                                    <div class="single_mixi_portfolio center">
                                        <div class="single_portfolio_img">
                                            <img src="img/aireacion.jpg" alt="" />
                                            <div class="mixi_portfolio_overlay">
                                                <a href="img/aireacion.jpg" class="gallery-img"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="single_portfolio_text">
                                            <h3>Torres de aireación</h3>
                                            <p>Torres de aireación y tanques de lodos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mix cat1">
                                    <div class="single_mixi_portfolio center">
                                        <div class="single_portfolio_img">
                                            <img src="img/tanque2.jpg" alt="" />
                                            <div class="mixi_portfolio_overlay">
                                                <a href="img/tanque2.jpg" class="gallery-img"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="single_portfolio_text">
                                            <h3>Tanques de almacenamiento</h3>
                                            <p>Tanques de almacenamiento de agua</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mix cat3">
                                    <div class="single_mixi_portfolio center">
                                        <div class="single_portfolio_img">
                                            <img src="img/aireacion.jpg" alt="" />
                                            <div class="mixi_portfolio_overlay">
                                                <a href="img/aireacion.jpg" class="gallery-img"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="single_portfolio_text">
                                            <h3>Tanques de lodos</h3>
                                            <p>Concentrador de lodos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </section><!-- End of Portfolio Section -->


    <section id="plantas" class="portfolio">
        <div class="container">
            <hr />
            <div class="row">
                <div class="main_portfolio_area m-y-3">
                    <div class="head_title center wow fadeInUp">
                        <h2>Plantas</h2>
                        <div class="row" id="carousel">
                            <div class="col-md-1 btn-bar">
                                <div class="botones"><a id="prev" href="#"><</a></div>
                            </div>
                            <div class="col-md-10" id="slides">
                                <ul>
                                    <li class="slide">
                                        <div class="quoteContainer">
                                            <p class="quote-phrase">
                                                Puesto que hay sustancias sólidas grandes en las aguas residuales, primero se filtra el agua por una criba
                                                para eliminar esos sólidos grandes. Entonces el agua fluye lentamente por un depósito pequeño donde las
                                                sustancias pesadas, tales como la arena, se asientan en el fondo, de donde son quitadas. Este depósito
                                                se llama la cámara de grava o arena.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="slide">
                                        <div class="quoteContainer">
                                            <p class="quote-phrase">
                                                Entonces el agua fluye a un depósito grande de sedimentación, donde se mueve lentamente por una o
                                                dos horas. Aquí la tierra o el lodo presente en el agua se asientan en el fondo, de donde se pueden eliminar con una bomba.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="slide">
                                        <div class="quoteContainer">
                                            <p class="quote-phrase">
                                                Sin embargo, al llegar a este punto, todavía hay muchas sustancias orgánicas en las aguas residuales.
                                                Por eso, el siguiente paso es el de canalizar el agua a la etapa biológica para el “tratamiento de gran
                                                potencia” mediante microorganismos. En las grandes instalaciones de tratamiento esto se hace por lo
                                                general por medio de añadir una concentración de microorganismos a las aguas residuales cuando éstas
                                                entran en el tanque de aireación.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="slide">
                                        <div class="quoteContainer">
                                            <p class="quote-phrase">
                                                Como sugiere el nombre del tanque, se inyecta o insufla aire u oxígeno puro en el agua. Entonces los microorganismos
                                                tienen una abundancia tanto de oxígeno como de alimento en las aguas residuales. De modo que se multiplican rápidamente
                                                y descomponen eficazmente las impurezas.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="slide">
                                        <div class="quoteContainer">
                                            <p class="quote-phrase">
                                                Después de esto se necesita un tanque de clarificación para separar los microorganismos del agua purificada.
                                                Estos se asientan en el fondo de este tanque, y el agua relativamente limpia ya puede verterse en los lagos o
                                                ríos. No obstante, es posible que esta agua todavía contenga muchas bacterias, algunas de las cuales pudieran
                                                ser patógenas, es decir, de las que causan enfermedades. A eso se debe que casi siempre se desinfecta esta agua
                                                con, por ejemplo, cloro u ozono para matar las bacterias peligrosas.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="slide">
                                        <div class="quoteContainer">
                                            <p class="quote-phrase">
                                                En los últimos años muchos países han tratado de mejorar su tratamiento de las aguas residuales. Tienen por meta
                                                una eliminación más eficaz de los compuestos de fósforo y nitrógeno presentes en el agua. Los excrementos humanos
                                                y muchísimos detergentes contienen mucho fósforo, del cual el tratamiento biológico solo elimina la tercera parte.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="slide">
                                        <div class="quoteContainer">
                                            <p class="quote-phrase">
                                                El fósforo causaría el crecimiento de algas en el agua a menos que fuera removido. Por eso, después que se haya
                                                cumplido el tratamiento biológico, se añade una sustancia química que produce un precipitado o que hace que se
                                                adhiera a ella el 90 por ciento del fósforo presente en el agua. Entonces puede recogerse como sedimento del
                                                fondo del tanque. Se pueden emplear para este propósito el sulfato de aluminio o el de hierro, los cuales son
                                                productos residuales de la industria.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="slide">
                                        <div class="quoteContainer">
                                            <p class="quote-phrase">
                                                También se han adoptado otros métodos fisicoquímicos para lograr un grado mayor de pureza. Algunos de estos métodos
                                                son: absorción sobre carbono activado u otros absorbentes, la osmosis a la inversa, el intercambio de iones y la
                                                destilación.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-1 btn-bar">
                                <div class="botones"><a id="next" href="#">></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_about_area">
                                <div class="main_about_content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="main_accordion wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">

                                                <div class="single_accordion">
                                                    <button class="accordion">Planta de tratamiento de aguas potable para su institución</button>
                                                    <div class="row panel">
                                                        <div class="col-sm-4 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/institucion.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p>Planta de tratamiento de aguas potable compacta de 0.5 litros</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/compacta.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p>Planta de tratamiento de aguas potable compacta de 1 litro</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/compacta1.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p>Planta de tratamiento de aguas potable compacta de 1 litro</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_accordion">
                                                    <button class="accordion">Planta de tratamiento de aguas potable para su hogar</button>
                                                    <div class="row panel">
                                                        <div class="col-sm-4"> </div>
                                                        <div class="col-sm-4 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/hogar.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4"> </div>
                                                    </div>
                                                </div>
                                                <div class="single_accordion">
                                                    <button class="accordion">Planta de tratamiento de aguas para su industria </button>
                                                    <div class="row panel">
                                                        <div class="col-sm-4"> </div>
                                                        <div class="col-sm-4 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/homebanner3.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4"> </div>
                                                    </div>
                                                </div>
                                                <div class="single_accordion">
                                                    <button class="accordion">Planta de tratamiento de aguas residuales</button>
                                                    <div class="row panel">
                                                        <div class="col-sm-2"> </div>
                                                        <div class="col-sm-3 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/residuales.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2"> </div>
                                                        <div class="col-sm-3 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/residuales1.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2"> </div>
                                                    </div>
                                                </div>
                                                <div class="single_accordion">
                                                    <button class="accordion">Planta de tratamiento de aguas lluvias</button>
                                                    <div class="row panel">
                                                        <div class="col-sm-3"> </div>
                                                        <div class="col-sm-2 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/lluvias.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2"> </div>
                                                        <div class="col-sm-2 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/lluvias1.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3"> </div>
                                                    </div>
                                                </div>

                                                <div class="single_accordion">
                                                    <button class="accordion">Montaje de una planta de tratamiento de agua</button>
                                                    <div class="row panel">
                                                        <div class="col-sm-2 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/montaje.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div><div class="col-sm-2 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/montaje1.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div><div class="col-sm-2 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/montaje2.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div><div class="col-sm-2 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/montaje3.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div><div class="col-sm-2 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/montaje4.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div><div class="col-sm-2 single_mixi_portfolio center">
                                                            <div class="single_portfolio_img">
                                                                <img src="img/plantas/montaje5.jpg" alt="" />
                                                            </div>
                                                            <div class="single_portfolio_text">
                                                                <p> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </section><!-- End of Portfolio Section -->


    <section id="team" class="team">
        <div class="container">
            <hr />
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_team_area m-y-3">
                        <div class="head_title center  wow fadeInUp">
                            <h2>Nuestros Clientes</h2>
                            <p>
                                El éxito de nuestra compañia siempre ha sido brindar calidad y satisfacción a nuestros clientes.
                                Algunos de nuestros clientes son:
                            </p>
                        </div>
                        <div class="main_team_content center">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <div class="single_team white-text m-t-2 wow zoomIn">
                                        <img src="img/depurar.jpg" alt="team" />
                                        <div class="single_team_overlay">
                                            <h4>Depurar S.A.</h4>
                                            <p>Depurar S.A.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="single_team white-text m-t-2 wow zoomIn">
                                        <img src="img/aguas.jpg" alt="team" />
                                        <div class="single_team_overlay">
                                            <h4>Aguacol LTDA</h4>
                                            <p>Aguas de colombia ltda</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="main_team_content center">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <div class="single_team white-text m-t-2 wow zoomIn">
                                        <img src="img/valrex.jpg" alt="team" />
                                        <div class="single_team_overlay">
                                            <h4>Valrex S.A.S.</h4>
                                            <p>Valrex S.A.S.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="single_team white-text m-t-2 wow zoomIn">
                                        <img src="img/proton.jpg" alt="team" />
                                        <div class="single_team_overlay">
                                            <h4>Proton LTDA</h4>
                                            <p>Industrias Proton LTDA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </section><!-- End of Team section -->


    <section id="works" class="works">
        <div class="container">
            <hr />
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_team_area m-y-3">
                        <div class="head_title center  wow fadeInUp">
                            <h2>Contactenos</h2>
                        </div>
                    </div>
                    <?php  if(isset($_SESSION['form_message'])) { echo utf8_encode($_SESSION['form_message']); } session_unset(); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="iframe-container height-map">
                                <div id="map"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <form class="form-horizontal" method="post" action="sendbymail.php">
                                <fieldset>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="email" name="email" type="text" placeholder="Correo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="message" name="message"
                                                      placeholder="   Mensaje..." rows="7"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-5"> </div>
                                        <div class="col-md-2 text-center">
                                            <button id="send-form" type="submit" class="btn btn-primary btn-md">Enviar</button>
                                        </div>
                                        <div class="col-md-5"> </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </section><!-- End of Team section -->



    <section id="footer-contact" class="footer">
        <div class="container">
            <div class="row">
                <div class="main_footer_area white-text p-b-3">
                    <div class="col-md-4">
                        <div class="single_f_widget p-t-3 wow fadeInUp">
                            <img src="img/logowhite.png" alt="" />
                            <div class="single_f_widget_text">
                                <p>
                                    Somos una empresa que se especializa en el manejo de la fibra de vidrio, con una trayectoria de más
                                    de 20 años de experienca en la industria de la fabricación y el mantemiento de plantas para el tratamiento
                                    de agua.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single_f_widget m-t-3 wow fadeInUp">
                            <h4>Contáctenos</h4>
                            <div class="single_f_widget_text f_reatures center">
                                <ul>
                                    <li><i class="fa fa-check"></i>(+57) (1) 779 8804</li>
                                    <li><i class="fa fa-check"></i>(+57) 314 328 1414</li>
                                    <li><i class="fa fa-check"></i>(+57) 320 481 7327</li>
                                    <li><i class="fa fa-check"></i><a href="mailto:info@globalmultiservis.com.co">info@globalmultiservis.com.co</a></li>
                                    <li><i class="fa fa-check"></i>Transversal 80 I # 88B - 07 Sur</li>
                                    <li><i class="fa fa-check"></i>Bogotá D.C.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="single_f_widget m-t-3 wow fadeInUp">
                            <h4>Enlaces</h4>
                            <div class="single_f_widget_text f_reatures center">
                                <ul>
                                    <li><i class="fa fa-check"></i><a class="links" href="#home">INICIO</a></li>
                                    <li><i class="fa fa-check"></i><a class="links" href="#about">NOSOTROS</a></li>
                                    <li><i class="fa fa-check"></i><a class="links" href="#service">PRODUCTOS</a></li>
                                    <li><i class="fa fa-check"></i><a class="links" href="#team">CLIENTES</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single_f_widget p-t-3 wow fadeInUp">
                            <h4>Siguenos</h4>
                            <hr />
                            <div class="single_f_widget_text">
                                <div class="socail_f_widget center">
                                    <!--<a href="#!" ><i class="fa fa-google-plus"></i></a>-->
                                    <a href="https://globalmultiservis-sas.negocio.site/"><i class="fa fa-500px"></i></a>
                                    <a href="https://twitter.com/GMultiservis"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/GlobalMultiservis/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/globalmultiservissas/"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- /Start your project here-->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Wow js -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!-- Mixitup js -->
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <!-- Magnific-popup js -->
    <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
    <!-- accordion js -->
    <script type="text/javascript" src="js/accordion.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/materialize.js"></script>

    <script type="text/javascript" src="js/globalservice.js"></script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANVLyrbPJI8DahFCK-_NenbD973Zw5lvI&callback=initMap">
    </script>
    <script>
        $(".button-collapse").sideNav();
    </script>
    <!-- wow js active -->
    <script type="text/javascript">
        new WOW().init();
    </script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.edslider.js"></script>


</body>

</html>
