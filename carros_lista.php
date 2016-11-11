<?php
    include 'constantes.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Lista de Carros</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="El Camino Web" />

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
         <link rel="icon" href="http://sanjuancomalapa.com.gt/superadmin/includes/logo_ecw.png" sizes="32x32" />
        <link rel="icon" href="http://sanjuancomalapa.com.gt/superadmin/includes/logo_ecw.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="http://sanjuancomalapa.com.gt/superadmin/includes/logo_ecw.png" />
        <meta name="msapplication-TileImage" content="http://sanjuancomalapa.com.gt/superadmin/includes/logo_ecw.png" />
        <script type="text/javascript">
            function MM_swapImgRestore() { //v3.0
              var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
            }
            function MM_preloadImages() { //v3.0
              var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
                var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
                if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
            }

            function MM_findObj(n, d) { //v4.01
              var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
                d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
              if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
              for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
              if(!x && d.getElementById) x=d.getElementById(n); return x;
            }

            function MM_swapImage() { //v3.0
              var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
               if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
            }
        </script>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo" onLoad="MM_preloadImages('pdf2.png')">
    <div id="myModal" class="modal fade modal_consultor" role="dialog">
        <div class="modal-dialog">
        </div>
    </div>
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.php">
                        <img src="includes/logo_ecw.png" width="110px" alt="El Camino Web" class="logo-default" /> </a> 
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
                
              
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
               <div class="page-sidebar navbar-collapse collapse">
                    
                    <?php  include('menu.php'); ?>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        
                         <!--
                        <li>
                            <span class="active">Listado</span>
                        </li>
                        -->
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <!-- BEGIN DASHBOARD STATS 1-->
                  <div class="row">
                  <?php

?>

                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        Carros NO Vendidos
                                        <a href="agregar_vehiculo.php?v=0">
                                            <button type="submit" class="btn blue">
                                                <i class="fa fa-check"></i> Crear 
                                            </button>
                                        </a>
                                    </div>
                                    <div class="tools"> 
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover " width="100%" id="sample_3" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="all">Foto</th>                                                                
                                                <th class="all">Marca</th>
                                                <th class="all">Línea</th>
                                                <th class="all">Modelo</th>
                                                <th class="all">Precio</th>
                                                <th class="all">Likes</th>
                                                <th class="all">Visitas</th>
                                                <th class="all">Comentarios</th>
                                                <th class="all" style="text-align: center; ">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <?php
                                                $db4 = new DataBase();
                                                $consulta_carros ="SELECT * FROM carro WHERE estado=1 AND estado_venta=0";               
                                                $carros = $db4->resultsQuery($consulta_carros);
                                                foreach ($carros as $carro) {
                                            ?>
                                                    <tr id="datos_eliminar<?=$carro['id']?>">
                                                        <td style="text-align: center;">
                                                            <?php
                                                                $db5 = new DataBase();
                                                                $query_img = "SELECT * FROM foto WHERE carro_id=".$carro['id']." AND estado=1 LIMIT 1";
                                                                $imgs = $db5->resultsQuery($query_img);
                                                                foreach ($imgs as $img) {
                                                                    $picture = "../".$img['url'];
                                                                }
                                                            ?>
                                                            <img src="<?=$picture?>" style="width: 80px; height: 60px;" />
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $db6 = new DataBase();
                                                                $query_mark = "SELECT * FROM marca WHERE id=".$carro['marca_id'];
                                                                $mark = $db6->resultsQuery($query_mark)[0];
                                                                echo $mark['nombre'];
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $db7 = new DataBase();
                                                                $query_line = "SELECT * FROM linea WHERE id=".$carro['linea_id'];
                                                                $line = $db7->resultsQuery($query_line)[0];
                                                                echo $line['nombre'];
                                                            ?>
                                                        </td>
                                                        <td><?=$carro['modelo']?></td>
                                                        <td>Q<?=number_format($carro['precio'], 2)?></td>
                                                        <?php
                                                            if($carro['likes'] == ""){
                                                                $likes = 0;
                                                            }else{
                                                                $likes = $carro['likes'];
                                                            }
                                                        ?>
                                                        <td style="text-align: center;"><?=$likes?></td>
                                                        <td style="text-align: center;"><?=$carro['visitas']?></td>
                                                        <?php
                                                            $db8 = new DataBase();
                                                            $query_comentarios = "SELECT * FROM comentario WHERE estado=1 AND carro_id=".$carro['id'];
                                                            $cant_commentary = $db8->numRows($query_comentarios);
                                                        ?>
                                                        <td style="text-align: center;"><?=$cant_commentary?></td>
                                                        <td style="text-align: center;">
                                                            <a href="carro_editar.php?id=<?=$carro['id']?>"> <button type="button" class="btn btn-primary "><i class="fa fa-pencil"></i> Editar</button></a>
                                                            <a onclick="eliminar(<?=$carro['id']?>)"><button type="button" class="btn btn-danger "><i class="fa fa-close"></i> Eliminar</button></a>
                                                            <a data-toggle="modal" href="#details" onclick="show_detail(<?=$carro['id']?>)"><button type="button" class="btn yellow-crusta">Detalles</button></a>

                                                            <a data-toggle="modal" onclick="getId(<?=$carro['id']?>)" href="#vender"> <button type="button" class="btn btn-primary "><i class="fa fa-money"></i> Vender </button></a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                  </div>
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                    
   
                  <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a><!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php
            include 'footer.php';
        ?>

        <!-- /.modal -->
        <div class="modal fade bs-modal-lg" id="details" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title titulo">Modal Title</h4>
                    </div>
                    <div class="modal-body">
                        <img class="picture_vehicle" src="" style="width: 25%;padding-bottom: 10px;" />
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td style="width: 20%"> <strong>Descripción Breve</strong> </td>
                                    <td class="short_description" style="width: 30%; ">  </td>
                                    <td style="width: 20%"> <strong>Descripción General</strong> </td>
                                    <td class="general_description" style="width: 30%; ">  </td>
                                </tr>                                
                                <tr>
                                    <td style="width: 20%"> <strong>Estado de Venta</strong> </td>
                                    <td class="status" style="width: 30%; ">  </td>
                                    <td style="width: 20%"> <strong>Tipo</strong> </td>
                                    <td class="type" style="width: 30%; ">  </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Marca</strong> </td>
                                    <td class="marca" style="width: 30%; ">  </td>
                                    <td style="width: 20%"> <strong>Línea</strong> </td>
                                    <td class="line" style="width: 30%; ">  </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Modelo</strong> </td>
                                    <td class="model" style="width: 30%; "> </td>
                                    <td style="width: 20%"> <strong>Millas Recorridas</strong> </td>
                                    <td class="millas" style="width: 30%; "> </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Color Interior</strong> </td>
                                    <td style="width: 30%; "> <div class="interior_color" style="width: 15px; height: 15px;"></div> </td>
                                    <td style="width: 20%"> <strong>Color Exterior</strong> </td>
                                    <td style="width: 30%; "> <div class="exterior_color" style="width: 15px; height: 15px;"></div> </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Combustible</strong> </td>
                                    <td class="combustible" style="width: 30%; "> </td>
                                    <td style="width: 20%"> <strong>Origen</strong> </td>
                                    <td class="origin" style="width: 30%; "> </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Transmisión</strong> </td>
                                    <td class="transmission" style="width: 30%; ">  </td>
                                    <td style="width: 20%"> <strong>Motor</strong> </td>
                                    <td class="motor" style="width: 30%; ">  </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Eficiencia en la Ciudad</strong> </td>
                                    <td class="ciudad" style="width: 30%; ">  </td>
                                    <td style="width: 20%"> <strong>Eficiencia en el Campo</strong> </td>
                                    <td class="campo" style="width: 30%; ">  </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Precio</strong> </td>
                                    <td class="price" style="width: 30%; "> </td>
                                    <td style="width: 20%"> <strong>Número de VIN</strong> </td>
                                    <td class="no_vin" style="width: 30%; "> </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Número de Chasis</strong> </td>
                                    <td class="no_chasis" style="width: 30%; "> </td>
                                    <td style="width: 20%"> <strong>Número de Motor</strong> </td>
                                    <td class="no_motor" style="width: 30%; "> </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Número de Título</strong> </td>
                                    <td class="no_titulo" style="width: 30%; "></td>
                                    <td style="width: 20%"> <strong>Número de Tarjeta</strong> </td>
                                    <td class="no_card" style="width: 30%; "></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Nombre de Tarjeta</strong> </td>
                                    <td class="name_card" style="width: 30%; "> </td>
                                    <td style="width: 20%"> <strong>Nit de Tarjeta</strong> </td>
                                    <td class="nit_card" style="width: 30%; "> </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Código</strong> </td>
                                    <td class="code_token" style="width: 30%; "> </td>
                                    <td style="width: 20%"> <strong>Puertas</strong> </td>
                                    <td class="doors" style="width: 30%; "> </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Bolsas de aire</strong> </td>
                                    <td class="bag" style="width: 30%; "> </td>
                                    <td style="width: 20%"> <strong>Sunroof</strong> </td>
                                    <td class="sunroof" style="width: 30%; "> </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Cerradura Central</strong> </td>
                                    <td class="lock" style="width: 30%; "> </td>
                                    <td style="width: 20%"> <strong>Financiamiento</strong> </td>
                                    <td class="financiamiento" style="width: 30%; "> </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Polarizado</strong> </td>
                                    <td class="dark_window" style="width: 30%; "></td>
                                    <td style="width: 20%"> <strong>Vidrios Eléctricos</strong> </td>
                                    <td class="windows" style="width: 30%; "></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Aros</strong> </td>
                                    <td class="aros" style="width: 30%; "></td>
                                    <td style="width: 20%"> <strong>Aire Acondicionado</strong> </td>
                                    <td class="air" style="width: 30%; "></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Timón Hidráulico</strong> </td>
                                    <td class="timon" style="width: 30%; "></td>
                                    <td style="width: 20%"> <strong>Alarma</strong> </td>
                                    <td class="alarma" style="width: 30%; "></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Certificado CarrosGT</strong> </td>
                                    <td class="certificado" style="width: 30%; "></td>
                                    <td style="width: 20%"> <strong>Certificado Taller</strong> </td>
                                    <td class="certificado_taller" style="width: 30%; "></td>
                                </tr>
                                <tr>
                                    <td style="width: 20%"> <strong>Creación</strong> </td>
                                    <td class="creacion" style="width: 30%; "></td>
                                    <td style="width: 20%"> <strong>Última Actualización</strong> </td>
                                    <td class="actualizacion" style="width: 30%; "></td>
                                </tr>
                            </tbody>
                        </table>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Salir</button>
                        <button type="button" class="btn green">Aceptar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- /.modal -->
        <div class="modal fade bs-modal-lg" id="vender" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title titulo">Vender</h4>
                    </div>
                    <form action="vendido.php" method="POST" >
                        <input type="hidden" value="" name="id" id="get_id" />
                        <div class="modal-body">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td style="width: 10%"> <strong>Valor: </strong> </td>
                                        <td class="short_description" style="width: 40%; ">
                                            <input type="number" required name="valor" style="width:100%;">
                                        </td>
                                        <td style="width: 10%"> <strong>Ribete</strong> </td>
                                        <td id="check_ribete">
                                            <input type="checkbox" id="checkbox_ribete">
                                        </td>
                                    </tr>
                                    <tr id="select_ribete" class="form_ribete" style="display: none;">
                                        <td style="width: 10%"> <strong>Vehículo</strong> </td>
                                        <td style="width: 40%;">
                                            <div class="form-group">
                                                <select id="single" name="vehiculo" class="form-control select2" style="width: 100%;">
                                                    <option value="">- Seleccione un vehículo -</option>
                                                    <?php
                                                        $db5 = new DataBase();
                                                        $query_vehiculo = "SELECT * FROM carro WHERE estado=1 AND ribete=1 AND estado_venta=0";
                                                        $vehiculos = $db5->resultsQuery($query_vehiculo);
                                                        foreach ($vehiculos as $vehiculo) { ?>
                                                            <option  value="<?=$vehiculo['id']?>"><?=$vehiculo['titulo']?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td style="width: 10%"> <strong>Valor Ribete: </strong> </td>
                                        <td class="short_description" style="width: 40%; ">
                                            <input type="number" class="valor_ribete" name="valor_ribete" style="width:100%;">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Salir</button>
                            <button type="submit" class="btn green">Aceptar</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script> 
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/table-datatables-responsive.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>

        <script src="js/funciones_generales.js" type="text/javascript"></script>
        <script src="js/funciones_menu_carga.js" type="text/javascript"></script>
        <script src="js/funciones_recarga_automatica.js" type="text/javascript"></script>
        <script src="js/ocultar_buttons.js" type="text/javascript"></script>

        <script type="text/javascript">
            function eliminar(id){
                var tabla = 'carro';

                $.ajax({
                    type: 'POST',
                    url: 'eliminar.php',
                    data: {'id': id, 'tabla': tabla},
                    success: function(data) {
                        $("#datos_eliminar" + data).hide('slow');
                    }
                });
            }

            function noVendido(id){
                $.ajax({
                    type: 'POST',
                    url: 'no_vender.php',
                    data: {'id': id},
                    success: function(data) {
                        window.location = 'carros_lista.php';
                    }
                });
            }

            function show_detail(id){
                $.ajax({
                    type: 'POST',
                    url: 'detalle_vehiculo.php',
                    data: {'id': id},
                    success: function(data) {
                        var dato = jQuery.parseJSON(data);
                        var estado_venta = '';
                        // console.log(dato);

                        $('.modal-title').text(dato.titulo);
                        $('.short_description').text(dato.descripcion_breve);
                        $('.general_description').text(dato.detalle);

                        if(dato.estado_venta == 1){
                            estado_venta = 'Vendido';
                        }else{
                            estado_venta = 'No Vendido';
                        }
                        $('.status').text(estado_venta);
                        $('.type').text(dato.type);
                        $('.marca').text(dato.mark_name);
                        $('.line').text(dato.line_name);
                        $('.model').text(dato.modelo);
                        $('.interior_color').html('<div class="interior_color" style="width: 15px; height: 15px; background: '+ dato.color_interior +'"></div>');
                        $('.exterior_color').html('<div class="interior_color" style="width: 15px; height: 15px; background: '+ dato.color_exterior +'"></div>');
                        $('.combustible').text(dato.combustible);
                        $('.origin').text(dato.origin);
                        $('.transmission').text(dato.tranmission);
                        $('.motor').text(dato.motor_name);
                        $('.campo').text(dato.eficiencia_campo);
                        $('.ciudad').text(dato.eficiencia_ciudad);
                        $('.millas').text(dato.millas);
                        $('.keys').text(dato.llaves);
                        $('.price').text('Q' + dato.precio);
                        $('.no_vin').text(dato.no_vin);
                        $('.no_chasis').text(dato.no_chasis);
                        $('.no_motor').text(dato.no_motor);
                        $('.no_titulo').text(dato.no_titulo);
                        $('.no_card').text(dato.no_tarjeta);
                        $('.name_card').text(dato.nombre_tarjeta);
                        $('.nit_card').text(dato.nit_tarjeta);
                        $('.code_token').text(dato.codigo);
                        $('.doors').text(dato.puertas);
                        $('.bag').html(test(dato.bolsas));
                        $('.sunroof').html(test(dato.sunroof));
                        $('.lock').html(test(dato.cerradura));
                        $('.financiamiento').html(test(dato.financiamiento));
                        $('.aros').html(test(dato.aros));
                        $('.air').html(test(dato.aire));
                        $('.timon').html(test(dato.timon));
                        $('.alarma').html(test(dato.alarma));
                        $('.creacion').text(dato.creacion);
                        $('.actualizacion').text(dato.actualizacion);
                        $('.certificado').html(test(dato.certificado));
                        $('.certificado_taller').html(test(dato.certificado_taller));
                        $('.dark_window').html(test(dato.polarizado));
                        $('.windows').html(test(dato.vidrios));
                        $('.picture_vehicle').attr('src', '../' + dato.foto);
                    }
                });
            }

            function test(dato){
                var estado = '';
                if(dato == 1){
                    estado = '<i class="fa fa-check"></i> Si';
                }else if(dato == 0){
                    estado = '<i class="fa fa-close"></i> No';
                }
                return estado;
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#checkbox_ribete').change(function () {
                    var marcado = $("#checkbox_ribete").prop("checked");

                    if(marcado == true){
                        $('#select_ribete').show('slow');
                    }else{
                        $('#select_ribete').hide('slow');
                    }
                });

            })

            function getId(id){
                $('#get_id').val(id);
                return id;
            }
        </script>
    </body>

</html>