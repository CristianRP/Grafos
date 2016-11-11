<?php
    session_start();
    include 'libs/DataBase.php';
    include 'includes/config.php';
?>
<!doctype html>
<!--[if IE 7 ]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="es">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="Contáctate con nosotros, te responderemos">
<meta name="author" content="El Camino Web">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="El Camino Web">
<meta name="keywords" content="Contáctanos, respondemos rápido" />
<meta expr:content='CarrosGT' property='og:title'/>
<meta expr:content='<?=$_SESSION['EMPRESA_ACERCA']?>' property='og:description'/>

<meta property="og:title" content="CarrosGT" />
<meta property="og:description" content="<?=$_SESSION['EMPRESA_ACERCA']?>" />
<meta property="og:image" content="<?=$image?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    include 'includes/favicon.php';
?>
<title><?=$_SESSION['EMPRESA_TITULO']?></title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800" media="screen" />
<!-- Custom styles for this template -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen" />
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/jquery.selectbox.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/mobile.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/ts.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key&amp;sensor=false"></script>

<!-- Twitter Feed Scripts 
     Uncomment to activate

<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
<script type="text/javascript" src="js/twitter/twitter_feed.js"></script> -->

</head>

<body>
<!--Header Start-->
<?php
    include 'includes/cabecera.php';
?>
<!--Header End-->
<section id="secondary-banner" class="dynamic-image-5"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Contáctanos</h2>
                <h4><?=$_SESSION['EMPRESA_DIRECCION']?></h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <ul class="breadcrumb">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li>Contáctanos</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--secondary-banner ends-->
<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page">
            <div class="col-md-12 padding-none"> 
                <!--MAP-->
                <div class="find_map row clearfix">
                    <h2 class="margin-bottom-25 margin-top-none">Encuéntranos</h2>
                    <div class="map margin-vertical-30">
                        <div id='google-map-listing' class="contact" data-longitude='-90.582126' data-latitude='14.606024' data-zoom='16' style='height: 390px;'></div>
                    </div>
                </div>
                <!--MAP--> 
                <!--CONTACT INFORMATION-->
                <div class="row contacts margin-top-25"> 
                    <!--LEFT INFORMATION-->
                    <div class="col-md-6 left-information">
                        <div class="contact_information information_head clearfix">
                            <h3 class="margin-bottom-25 margin-top-none">INFORMACIÓN DE CONTACTO</h3>
                            <div class="address clearfix address_details margin-right-25 padding-bottom-40">
                                <ul class="margin-bottom-none">
                                    <li><i class="fa fa-map-marker"></i><strong>Dirección:</strong> <span><?=$_SESSION['EMPRESA_DIRECCION']?></span></li>
                                    <li><i class="fa fa-phone"></i><strong>Teléfono:</strong> <span><?=$_SESSION['EMPRESA_TEL']?></span></li>
                                    <li><i class="fa fa-envelope-o"></i><strong>Correo:</strong> <a href="mailto:<?=$_SESSION['EMPRESA_CORREO']?>"><?=$_SESSION['EMPRESA_CORREO']?></a></li>
                                    <li class="padding-bottom-none"><i class="fa fa-laptop"></i><strong>Web:</strong> <a href="http://www.carrosgt.com">www.carrosgt.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--INFORMATION HOUR-->
                        <div class="information_hour information_head margin-top-30 xs-padding-bottom-40">
                            <h3 class="margin-bottom-25 margin-top-none">Horarios</h3>
                            <div class="row">
                                <div class="col-sm-4 padding-left-none">
                                    <div class="deparment">
                                        <table class="table table-bordered no-border font-12px">
                                            <thead>
                                                <tr>
                                                    <td colspan="2"><strong>Departamento de Ventas</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Lun:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Mar:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Mie:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Jue:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Vie:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Sab:</td>
                                                    <td>8:00am - 12:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Dom:</td>
                                                    <td>Cerrado</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="deparment">
                                        <table class="table table-bordered no-border font-12px">
                                            <thead>
                                                <tr>
                                                    <td colspan="2"><strong>Departamento de Servicio</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Lun:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Mar:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Mie:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Jue:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Vie:</td>
                                                    <td>8:00am - 5:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Sab:</td>
                                                    <td>8:00am - 12:00pm</td>
                                                </tr>
                                                <tr>
                                                    <td>Dom:</td>
                                                    <td>Cerrado</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--INFORMATION HOUR--> 
                    </div>
                    <!--LEFT INFORMATION--> 
                    
                    <!--RIGHT INFORMATION-->
                    <div class="col-md-5 col-lg-offset-1 col-md-offset-1 padding-right-none xs-padding-left-none sm-padding-left-none xs-margin-top-30">
                        <div class="contact_wrapper information_head">
                            <h3 class="margin-bottom-25 margin-top-none">ENVÍANOS UN MENSAJE</h3>
                            <div class="form_contact margin-bottom-20">
                                <div id="result"></div>
                                <fieldset id="contact_form">
                                    <form action="enviar_mail.php" method="POST" id="form_contacto">
                                        <input type="text" style="display: none; " name="tipo" value="1">
                                        <input type="text" id="nombre" name="name" class="form-control margin-bottom-25" required placeholder="Nombre  (*)" />
                                        <input type="email" id="correo" name="email" class="form-control margin-bottom-25" required placeholder="Correo  (*)" />
                                        <textarea name="msg" id="msj" class="form-control margin-bottom-25 contact_textarea" required placeholder="Tu mensaje" rows="7"></textarea>
                                        <p id="respuesta_contacto" style="display:none; color: #c7081b;"></p>
                                        <input id="submit_btn" type="submit" value="Enviar Mensaje">
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!--RIGHT INFORMATION--> 
                    
                </div>
                <!---CONTACT INFORMATION--> 
                
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--container ends--> 
</section>
<!--content ends-->
<div class="clearfix"></div>
<div class="back_to_top"> <img src="http://demo.themesuite.com/automotive/images/arrow-up.png" alt="scroll up" /> </div>

<!--Footer Start-->

<div class="clearfix"></div>
<?php
    include 'includes/footer.php';
?>
<script src="js/retina.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script src="js/modernizr.custom.js"></script> 

<!-- FlexSlider --> 
<script defer src="js/jquery.flexslider.js"></script> 
<script src="js/jquery.bxslider.js" type="text/javascript"></script> 
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#form_contacto').submit(function() {
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(data) {
                    var msj = '';

                    if(data == 1){
                        msj = 'El msj fue enviado correctamente.';
                    }else{
                        msj = 'El msj no fue enviado.';
                    }

                    $('#respuesta_contacto').text(msj);
                    $('#respuesta_contacto').show('slow');
                    $('#nombre').val('');
                    $('#correo').val('');
                    $('#msj').val('');
                }
            })
            return false;
        });
    });
</script>
</body>
</html>