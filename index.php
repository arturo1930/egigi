<?php
require_once './web/admin/app/connection/Connection.php';
$connection = new Connection();
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Gracias a la pasión de nuestro el objetivo de e-gigi es impulsar la economía Mexicana, creando un Marketplace donde se comercializan productos exclusivamente creados por mexicanos.">
        <meta name="author" content="hmvoliciones.com">

        <title>e-gigi.com</title>

        <!-- Bootstrap Core CSS -->
        <link href="asset/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">


        <!-- Animate CSS -->
        <link href="css/animate.css" rel="stylesheet" >

        <!-- Owl-Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css" >
        <link rel="stylesheet" href="css/owl.theme.css" >
        <link rel="stylesheet" href="css/owl.transitions.css" >

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- Colors CSS -->
        <link rel="stylesheet" type="text/css" href="css/color/green.css">



        <!-- Colors CSS -->
        <link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">
        <link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">
        <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
        <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
        <link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">
        <link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


        <!-- Modernizer js -->
        <script src="js/modernizr.custom.js"></script>


        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="index">


        <!-- Styleswitcher
    ================================================== -->
        <!--
        <div class="colors-switcher">
            <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>        
            <ul class="colors-list">
                <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
                <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
                <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
                <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>

                <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
                <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>

            </ul>

        </div>  
        -->
        <!-- Styleswitcher End
        ================================================== -->

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">e-gigi.com</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#home">Inicio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about-us">Nosotros</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#service">Servicios</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">Equipo</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="http://www.e-gigi.com/shop/index.php">Tienda</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#providers">Proveedores</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#latest-news">Blog</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>




        <!-- Start Home Page Slider -->
        <section id="page-top">
            <!-- Carousel -->
            <div id="main-slide" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slide" data-slide-to="1"></li>
                    <li data-target="#main-slide" data-slide-to="2"></li>
                </ol>
                <!--/ Indicators end-->

                <!-- Carousel inner -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="images/egigi/mexico_charro.png" alt="artesanias mexicanas">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h1 class="animated3">
                                    <span><strong>Bienvenidos a</strong> e-gigi.com</span>
                                </h1>
                                <p class="animated2">
                                    Somos una empresa mexicana que proporciona un escaparate mundial de venta en línea al productor mexicano.
                                </p>	
                                <a href="#home" class="page-scroll btn btn-primary animated1">Leer m&aacute;s</a>
                            </div>
                        </div>
                    </div>
                    <!--/ Carousel item end -->

                    <div class="item">
                        <img class="img-responsive" src="images/egigi/mexico_artesanias.png" alt="slider">

                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h1 class="animated1">
                                    <span>Productores <strong>Mexicanos</strong></span>
                                </h1>
                                <p class="animated2">Apoyamos al productor mexicano con la comercializacion y promoci&oacute;n de su producto.</p>
                                <a href="#contact" class="page-scroll btn btn-primary animated3">Contacto</a>
                            </div>
                        </div>
                    </div>
                    <!--/ Carousel item end -->

                    <div class="item">
                        <img class="img-responsive" src="images/egigi/mexico_recuerdos.png" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h1 class="animated2">
                                    <span><strong>Marketplace</strong></span>
                                </h1>
                                <p class="animated1">
                                    Los productos y productores mexicanos son nuestra prioridad.
                                </p>	
                                <a class="animated3 slider btn btn-primary btn-min-block" href="#">
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                    Tienda
                                </a>                             

                            </div>
                        </div>
                    </div>
                    <!--/ Carousel item end -->
                </div>
                <!-- Carousel inner end-->

                <!-- Controls -->
                <a class="left carousel-control" href="#main-slide" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="right carousel-control" href="#main-slide" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
            <!-- /carousel -->
        </section>
        <!-- End Home Page Slider -->



        <!-- Start Feature Section -->
        <section id="home" class="feature-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-magic"></i>
                            <div class="feature-content">
                                <h4>Dise&ntilde;o de marca</h4>
                                <p>Te asesoramos en el proceso de creación de tu marca y vamos de la mano contigo en todo el proceso, para que puedas crear un producto de &eacute;xito</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="feature-content">
                                <h4>E-commerce</h4>
                                <p>&iquest;Ya tienes un producto?, Te apoyamos a impulsar las ventas de tu producto, mediante un esquema de comisiones justas.</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-gift"></i>
                            <div class="feature-content">
                                <h4>Marketing</h4>
                                <p>Creamos planes de mercadotecnia para dar a conocer tu producto en los medios sociales más utilizados.</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->                    
                </div><!-- /.row -->

            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->


        <!-- Start Call to Action Section -->
        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>
                            Somos una empresa joven con un futuro muy prometedor en el comercio digital, creada con el objetivo de dignificar la labor de los produtores mexicanos y dar a conocer la calidad de sus productos, nos comprometemos contigo.
                        </h1>
                        <a href="#contact" class="btn btn-primary">Contactanos</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call to Action Section -->
        <!-- Start About Us Section -->
        <section id="about-us" class="about-us-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h3>Nosotros</h3>
                            <p>
                                Gracias a la pasi&oacute;n de nuestro equipo el objetivo de <strong>e-gigi</strong> es impulsar la economía mexicana, creando una fuente de comercialización para productos mexicanos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="welcome-section text-center">
                            <img src="images/egigi/team.png" class="img-responsive" alt="..">
                            <h4>Filosof&iacute;a</h4>
                            <div class="border"></div>
                            <p>Trabajando en un equipo colaborativo impulsamos la calidad mexicana al comercio nacional e internacional.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="welcome-section text-center">
                            <img src="images/egigi/mision.png" class="img-responsive" alt="..">
                            <h4>Misi&oacute;n</h4>
                            <div class="border"></div>
                            <p>                            
                                Colaborar activamente en la transformación del comercio global. Rescatar el valor manual en la elaboraci&oacute;n de productos como medio para un crecimiento econ&oacute;mico arm&oacute;nico.                                                    
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="welcome-section text-center">
                            <img src="images/egigi/vision.png" class="img-responsive" alt="..">
                            <h4>Visi&oacute;n</h4>
                            <div class="border"></div>
                            <p>                            
                                Ser un medio que dignifique la labor manual posicionando los productos que vendemos en el consumo global.
                            </p>
                        </div>
                    </div>

                </div><!-- /.row -->            

            </div><!-- /.container -->
        </section>
        <!-- End About Us Section -->    

        <!-- Start Feature Section -->
        <section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Nuestros servicios</h3>
                            <p>Nuestro equipo se compromete a ofrecer siempre un servicio de calidad.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-magic"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4>Dise&ntilde;o de marca</h4>
                                    <p>Te asesoramos en el proceso de creación de tu marca y vamos de la mano contigo en todo el proceso, para que puedas crear un producto de &eacute;xito</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-shopping-cart"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">                                                                                                         
                                    <h4>E-commerce</h4>
                                    <p>&iquest;Ya tienes un producto?, Te apoyamos a impulsar las ventas de tu producto, mediante un esquema de comisiones justas.</p>

                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-gift"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4>Marketing</h4>
                                    <p>Creamos planes de mercadotecnia para dar a conocer tu producto en los medios sociales más utilizados.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->                                                          
                </div><!-- /.row -->

            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->    
        <!-- Start Team Member Section -->
        <section id="team" class="team-member-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h3>Nuestro equipo</h3>
                            <p>El compromiso y la sinergia de nuestro equipo busca siempre ofrecer un servicio de calidad.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="team-section">

                            <div class="our-team">
                                <div class="team-member">
                                    <img src="images/team/marisela.png" class="img-responsive" alt="">
                                    <div class="team-details">
                                        <h4>Marisela Gayosso</h4>
                                        <p>Fundador</p>
                                        <ul>
                                            <li><a target="_blank" href="https://www.facebook.com/mar.cielo.965"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com/egigicom1"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/in/marisela-gayosso-5092044a/"><i class="fa fa-linkedin"></i></a></li>                                            
                                        </ul>
                                    </div>
                                </div>



                                <div class="team-member">
                                    <img src="images/team/javier.png" class="img-responsive" alt="">
                                    <div class="team-details">
                                        <h4>Francisco Javier Mungu&iacute;a</h4>
                                        <p>Scrum Master</p>
                                        <ul>
                                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100010600515210"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="http://hmvsoluciones.com/cv/fjmv/"><i class="fa fa-magic"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/in/francisco-javier-mungu%C3%ADa-vald%C3%A9s-42682aa6/"><i class="fa fa-linkedin"></i></a></li>                                                                                        
                                        </ul>
                                    </div>
                                </div>    

                                <div class="team-member">
                                    <img src="images/team/arturo.png" class="img-responsive" alt="">
                                    <div class="team-details">
                                        <h4>Luis Arturo Mungu&iacute;a</h4>
                                        <p>Software</p>
                                        <ul>
                                            <li><a   href="https://www.facebook.com/luisarturo.munguia.73"><i class="fa fa-facebook"></i></a></li>
                                            <li><a  href="http://hmvsoluciones.com/cv/lamv/"><i class="fa fa-magic"></i></a></li>
                                            <li><a  href="https//www.linkedin.com/in/luis-arturo-munguia-valdes-3a015574/"><i class="fa fa-linkedin"></i></a></li>                                            
                                        </ul>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Member Section -->
        <!-- Start Providers Section -->
        <section id="providers" class="portfolio-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Conoce a nuestros proveedores</h3>
                            <p>La calidad de nuestros produtos radica en el trabajo de nuestros proveedores.</p>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="overflow-y: 300px">

                        <!-- Start items -->
                        <ul id="portfolio-list">
                            <?php
                            $queryProviders = "SELECT * FROM proveedor";

                            $listProviders = $connection->getAll($queryProviders);

                            foreach ($listProviders as $key => $value) {
                                ?>
                                <li>
                                    <div class="portfolio-item">
                                        <img src="images/providers/<?php echo $value['img'] ?>" class="img-responsive" alt="<?php echo $value['imgAlt'] ?>" />
                                        <div class="portfolio-caption">
                                            <h4>Sombreros</h4>
                                            <a onclick="loadModalProvider(<?php echo $value['idProveedor'] ?>)" class="link-1"><i class="fa fa-magic"></i></a>
                                            <!-- provider link if the provider has a web page-->
                                            <?php if (!empty($value['webUrl'])) { ?>
                                                <a target="_blank" href="<?php echo $value['webUrl'] ?>" class="link-2"><i class="fa fa-link"></i></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </li>  
                            <?php } ?>
                        </ul>
                        <!-- End items -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Providers Section -->


        <!-- Start Fun Facts Section -->
        <section class="fun-facts">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-item">
                            <i class="fa fa-cloud-upload"></i>
                            <div class="timer" id="item1" data-to="50" data-speed="5000"></div>
                            <h5>Proveedores</h5>                               
                        </div>
                    </div>  
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-item">
                            <i class="fa fa-check"></i>
                            <div class="timer" id="item2" data-to="300" data-speed="5000"></div>
                            <h5>Productos</h5>                               
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-item">
                            <i class="fa fa-code"></i>
                            <div class="timer" id="item3" data-to="100" data-speed="5000"></div>
                            <h5>Campa&ntilde;as de marketing</h5>                               
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-item">
                            <i class="fa fa-male"></i>
                            <div class="timer" id="item4" data-to="5000" data-speed="5000"></div>
                            <h5>Clientes satisfechos</h5>                               
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fun Facts Section -->        


        <!-- Start Latest News Section -->
        <section id="latest-news" class="latest-news-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Blog</h3>
                            <p>Articulos de intres para t&iacute;</p>
                        </div>
                    </div>
                </div>
                <div class="row">                
                    <div class="latest-news">

                        <?php
                        $query = "SELECT * FROM blog";

                        $list = $connection->getAll($query);

                        foreach ($list as $key => $value) {
                            ?>

                            <div class="col-md-12">
                                <div class="latest-post">
                                    <img src="images/blog/<?php echo $value['img'] ?>" class="img-responsive" alt="<?php echo $value['imgAlt'] ?>">
                                    <h4><a><?php echo $value['nombre'] ?></a></h4>
                                    <div class="post-details">
                                        <span class="date">
                                            <strong><?php echo date("d", strtotime($value['fecha'])) ?></strong> 
                                            <br><?php echo date("m, Y", strtotime($value['fecha'])) ?>
                                        </span>

                                    </div>
                                    <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
                                    <a onclick="loadModalBlog(<?php echo $value['idBlog'] ?>)"class="btn btn-primary">Leer mas</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div
                </div>
            </div>
        </section>
        <!-- End Latest News Section -->

        <!-- End Latest News Section -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h3>Contactanos</h3>
                            <p class="white-text">Estamos para servirte por favor contactanos</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="Por favor ingrese el nombre.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="por favor ingrese la dirección de correo.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Tel&eacute;fono *" id="phone" required data-validation-required-message="Por favor ingrese su numero de tel&eacute;fono.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Mensaje *" id="message" required data-validation-required-message="Por favor ingrese un mensaje."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-contact-info">
                            <h4>Informaci&oacute;n de contacto</h4>
                            <ul>
                                <li><strong>E-mail :</strong> administracion@e-gigi.com</li>
                                <li><strong>Teléfono :</strong>  (+52) 775 125 38 66</li>                                
                                <li><strong>Web :</strong> e-gigi.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <div class="footer-contact-info">
                            <h4>Horario</h4>
                            <ul>
                                <li><strong>Lunes-Viernes :</strong> 9 am a 5 pm</li>
                                <li><strong>Direcci&oacute;n :</strong> Plan de Ayala No. 404 Colonia Medias tierras Tulancingo de Bravo Hidalgo Méxic</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <span class="copyright">Copyright &copy; e-gigi.com 2018</span>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="footer-social text-center">
                                <ul>
                                    <li><a href="https://twitter.com/egigicom1"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/egigimexico/"><i class="fa fa-facebook"></i></a></li>



                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="footer-link">
                                <ul class="pull-right">
                                    <!--                                    <li><a href="#">Privacy Policy</a>
                                                                        </li>
                                                                        <li><a href="#">Terms of Use</a>
                                                                        </li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </footer>
        </section>


        <div id="loader">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>

        <!-- Start Providers Modal Section -->
        <div class="section-modal modal fade" id="egigiModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id='egigiModalContent'>

                    </div> 
                    <div class="row" id="eggiFormContent">
                        <form name="sentMessage" id="contactForm" novalidate="">
                            <div class="row">
                                <div class="col-lg-5 text-center">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nombre *" id="name" required="" data-validation-required-message="Por favor ingrese el nombre.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" id="email" required="" data-validation-required-message="por favor ingrese la dirección de correo." aria-invalid="false">
                                        <p class="help-block text-danger"></p>
                                    </div>                                    

                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Mensaje *" id="message" required="" data-validation-required-message="Por favor ingrese un mensaje."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>


                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
        <!-- End Providers Modal Section -->

        <!-- jQuery Version 2.1.1 -->
        <script src="js/jquery-2.1.1.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="asset/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/count-to.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/cbpAnimatedHeader.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/styleswitcher.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/script.js"></script>


    </body>

</html>
