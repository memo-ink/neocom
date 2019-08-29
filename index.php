<?php
   include 'admin/conexion_SQL2.php';
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!--link rel="stylesheet" href="assets/css/responsive_drop.css"-->
      <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
      <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen"/>
      <style>
         span.reference{
         position:fixed;
         left:5px;
         top:5px;
         font-size:10px;
         text-shadow:1px 1px 1px #fff;
         }
         span.reference a{
         color:#555;
         text-decoration:none;
         text-transform:uppercase;
         }
         span.reference a:hover{
         color:#000;
         }
         h1{
         color:#ccc;
         font-size:36px;
         text-shadow:1px 1px 1px #fff;
         padding:20px;
         }
      </style>
   </head>
   <body>
      <div id="content">
         <h1></h1>
         <div id="wrapper">
            <div id="navigation"  style="display:none;">
               <ul>
                  <li class="selected">
                     <a href="#">Datos</a>
                  </li>
                  <li>
                     <a href="#">Precios</a>
                  </li>
                  <li>
                     <a href="#">Impuestos</a>
                  </li>
                  <li>
                     <a href="#">Registros</a>
                  </li>
               </ul>
            </div>
            <div id="steps">
               <form id="formElem" name="formElem" action="" method="post">
                  <fieldset class="step">
                     <legend>Datos Generales</legend>
                     <div class="content">
                        <div class="form-group c-12">
                           <div class="c-6">
                              <label for="CVE_ART" class="c-4 mtop control-label">Clave</label>
                              <div class="c-8 mtop">
                                 <input type="text" id="CVE_ART" name="CVE_ART" value="<?php echo $clave;?>">
                              </div>
                              <label for="CVE_ALTER" class="c-4 mtop control-label">Clave alterna</label>
                              <div class="c-8 mtop">
                                 <input type="text" id="CVE_ALTER" name="CVE_ALTER" value="">
                              </div>
                           </div>
                           <div class="c-4"></div>
                           <div class="c-2">
                             <div class="photo">
                               <img src="assets/fotos/<?php echo $ima;?>" />
                             </div>
                           </div>
                        </div>
                        <div class="form-group c-12">
                           <label for="DESCR" class="c-2 control-label">Descripci&oacute;n</label>
                           <div class="c-10">
                              <input type="text" id="DESCR" name="DESCR" value="<?php echo $des;?>">
                           </div>
                        </div>
                        <div class="form-group c-12">
                           <label for="LIN_PROD" class="c-2 control-label">L&iacute;nea</label>
                           <div class="c-4">
                              <input type="text" id="LIN_PROD" name="LIN_PROD" value="<?php echo $linea;?>">
                           </div>
                           <label for="UNI_MED" class="c-2 control-label">Unidad de entrada</label>
                           <div class="c-4">
                              <input type="text" id="UNI_MED" name="UNI_MED" value="<?php echo $unidad;?>">
                           </div>
                        </div>
                        <div class="form-group c-12">
                           <label for="TIEM_SURT" class="c-2 control-label">Tiempo de surtido</label>
                           <div class="c-4">
                              <input type="text" id="TIEM_SURT" name="TIEM_SURT" value="<?php echo $t_sur;?>">
                           </div>
                           <label for="UNI_ALT" class="c-2 control-label">Unidad de salida</label>
                           <div class="c-4">
                              <input type="text" id="UNI_ALT" name="UNI_ALT" value="<?php echo $uni_sal;?>">
                           </div>
                        </div>
                        <div class="form-group c-12">
                           <label for="CTRL_ALM" class="c-2 control-label">Control de almac&eacute;n</label>
                           <div class="c-4">
                              <input type="text" id="CTRL_ALM" name="CTRL_ALM" value="<?php echo $c_alm;?>">
                           </div>
                           <label for="FAC_CONV" class="c-2 control-label">Factor entre unidades</label>
                           <div class="c-4">
                              <input type="text" id="FAC_CONV" name="FAC_CONV" value="<?php echo $factor;?>">
                           </div>
                        </div>
                        <div class="form-group c-12">
                           <label for="VOLUMEN" class="c-2 control-label">Volumen</label>
                           <div class="c-2">
                              <input type="text" id="VOLUMEN" name="VOLUMEN" value="<?php echo $volumen;?>">
                           </div>
                           <label for="PESO" class="c-2 control-label">Peso</label>
                           <div class="c-2">
                              <input type="text" id="PESO" name="PESO" value="<?php echo $peso;?>">
                           </div>
                           <label for="UNI_EMPR" class="c-2 control-label">Unidad de empaque</label>
                           <div class="c-2">
                              <input type="text" id="UNI_EMPR" name="UNI_EMPR" value="<?php echo $uni_emp;?>">
                           </div>
                        </div>
                        <div class="form-group c-12">
                           <div class="c-2">
                              <input type="checkbox" class="checkbox" id="CON_SERIE" name="CON_SERIE" <?php echo $ser;?>>
                           </div>
                           <label for="CON_SERIE" class="c-2 control-label">Numeros de serie</label>
                           <div class="c-2">
                              <input type="checkbox" class="checkbox" id="CON_LOTE" name="CON_LOTE" <?php echo $lot;?>>
                           </div>
                           <label for="CON_LOTE" class="c-2 control-label">Lotes</label>
                           <div class="c-2">
                              <input type="checkbox" class="checkbox" id="CON_PEDIMENTO" name="CON_PEDIMENTO" <?php echo $ped;?>>
                           </div>
                           <label for="CON_PEDIMENTO" class="c-2 control-label">Pedimentos anuales</label>
                        </div>
                     </div>
                     <div id="navigation2">
                        <a href="#" class="btn-des" data-id="1">Anterior</a>
                        <a href="#" class="btn-default" data-id="2">Siguiente</a>
                     </div>
                  </fieldset>
                  <fieldset class="step">
                     <legend>Precios y control</legend>
                     <div class="content">
                        <div class="form-group c-7">
                           <h3>Precios</h3>
                           <label for="PRECIO" class="c-4 control-label">Precio publico</label>
                           <div class="c-8">
                              <input type="text" id="PRECIO" name="PRECIO" value="">
                           </div>
                           <label for="NUM_MON" class="c-4 control-label">Moneda</label>
                           <div class="c-8">
                              <input type="text" id="NUM_MON" name="NUM_MON" value="">
                           </div>
                           <div class="space c-12"></div>
                           <div class="form-group c-5">
                              <h3>Costeo</h3>
                              <div class="c-2">
                                 <input type="radio" id="TIP_COSTEO" name="TIP_COSTEO" <?php echo $ueps;?>>
                              </div>
                              <label for="TIP_COSTEO" class="c-8 control-label">UEPS</label>
                              <div class="c-2">
                                 <input type="radio" id="TIP_COSTEO" name="TIP_COSTEO" <?php echo $peps;?>>
                              </div>
                              <label for="TIP_COSTEO" class="c-8 control-label">PEPS</label>
                              <div class="c-2">
                                 <input type="radio" id="TIP_COSTEO" name="TIP_COSTEO">
                              </div>
                              <label for="TIP_COSTEO" class="c-8 control-label">Promedio</label>
                              <div class="c-2">
                                 <input type="radio" id="TIP_COSTEO" name="TIP_COSTEO" <?php echo $est;?>>
                              </div>
                              <label for="TIP_COSTEO" class="c-8 control-label">Est&aacute;ndar</label>
                              <div class="c-2">
                                 <input type="radio" id="TIP_COSTEO" name="TIP_COSTEO" <?php echo $ide;?>>
                              </div>
                              <label for="TIP_COSTEO" class="c-8 control-label">Identificado</label>
                           </div>
                           <div class="form-group c-7">
                              <h3>Proveedores</h3>
                              <label class="c-4 control-label">Proveedor</label>
                              <div class="c-8">
                                 <input type="text" id="PROV" name="PROV" value="">
                              </div>
                           </div>
                        </div>
                        <div class="form-group c-5">
                           <h3>Cantidades</h3>
                           <label for="EXIST" class="c-4 control-label">Existencia</label>
                           <div class="c-8">
                              <input type="text" id="EXIST" name="EXIST" value="<?php echo $exist;?>">
                           </div>
                           <label for="STOCK_MIN" class="c-4 control-label">Stock m&iacute;n.</label>
                           <div class="c-8">
                              <input type="text" id="STOCK_MIN" name="STOCK_MIN" value="<?php echo $s_min;?>">
                           </div>
                           <label for="STOCK_MAX" class="c-4 control-label">Stock m&aacute;x.</label>
                           <div class="c-8">
                              <input type="text" id="STOCK_MAX" name="STOCK_MAX" value="<?php echo $s_max;?>">
                           </div>
                           <label for="APART" class="c-4 control-label">Apartado</label>
                           <div class="c-8">
                              <input type="text" id="APART" name="APART" value="<?php echo $apart;?>">
                           </div>
                        </div>
                     </div>
                     <div id="navigation2">
                        <a href="#" class="btn-default" data-id="1">Anterior</a>
                        <a href="#" class="btn-default" data-id="3">Siguiente</a>
                     </div>
                  </fieldset>
                  <fieldset class="step">
                     <legend>Impuestos</legend>
                     <div class="content">
                        <div class="form-group c-5">
                           <h3>Impuestos</h3>
                           <label for="CVE_ESQIMPU" class="c-4 control-label">Esquema</label>
                           <div class="c-8">
                              <input type="text" class="input-btn" id="CVE_ESQIMPU" name="CVE_ESQIMPU" value="<?php echo $cve_impuesto;?>"><a id="btn_popup" class="btn-default">Im</a>
                           </div>
                        </div>
                        <div class="form-group c-7">
                            <h3>Configuraci&oacute;n adicional para IEPS</h3>
                            <div class="c-2">
                               <input type="checkbox" class="checkbox" id="" name="">
                            </div>
                            <label for="" class="c-10 control-label">Activar para este producto</label>
                            <label for="" class="c-12 control-label">Aplicar configuraci&oacute;n a:</label>
                            <div class="c-8">
                                <input type="text" id="" name="" value="">
                            </div>
                            <div class="c-6">
                              <h3>Tasa de IEPS</h3>
                              <div class="c-2">
                                 <input type="radio" id="IEPS" name="IEPS">
                              </div>
                              <label for="IEPS" class="c-10 control-label">Cuota</label>
                              <div class="c-2">
                                 <input type="radio" id="IEPS" name="IEPS">
                              </div>
                              <label for="IEPS" class="c-10 control-label">El m&aacute;s alto</label>
                              <div class="c-2">
                                 <input type="radio" id="IEPS" name="IEPS">
                              </div>
                              <label for="IEPS" class="c-10 control-label">Ambos</label>
                            </div>
                            <div class="c-6">
                              <label for="" class="c-4 control-label">Cuota</label>
                              <div class="c-8">
                                 <input type="text" id="" name="" value="">
                              </div>
                            </div>
                        </div>
                     </div>
                     <div id="navigation2">
                        <a href="#" class="btn-default" data-id="2">Anterior</a>
                        <a href="#" class="btn-default" data-id="4">Siguiente</a>
                     </div>
                  </fieldset>
                  <fieldset class="step">
                     <legend>Registros y acumulado</legend>
                     <div class="content">
                        <div class="form-group c-6">
                           <h3>Proveedores</h3>
                           <label for="PROV" class="c-4 control-label">Proveedor 1</label>
                           <div class="c-8">
                              <input type="text" id="PROV" name="PROV" value="">
                           </div>
                           <label for="PROV" class="c-4 control-label">Proveedor 2</label>
                           <div class="c-8">
                              <input type="text" id="PROV" name="PROV" value="">
                           </div>
                        </div>
                        <div class="form-group c-6">
                           <h3> Cantidades pendientes</h3>
                           <label for="COMP_X_REC" class="c-4 control-label">Pendientes por recibir</label>
                           <div class="c-8">
                              <input type="text" id="COMP_X_REC" name="COMP_X_REC" value="<?php echo $comp_x_rec;?>">
                           </div>
                           <label for="PEND_SURT" class="c-4 control-label">Pendientes por surtir</label>
                           <div class="c-8">
                              <input type="text" id="PEND_SURT" name="PEND_SURT" value="<?php echo $pend_surt;?>">
                           </div>
                        </div>
                        <div class="form-group c-4">
                           <h3>Fecha &uacute;ltima</h3>
                           <label for="FCH_ULTCOM" class="c-4 control-label">Compra</label>
                           <div class="c-8">
                              <input type="text" id="FCH_ULTCOM" name="FCH_ULTCOM" value="<?php echo $f_ultcom;?>">
                           </div>
                           <label for="FCH_ULTVTA" class="c-4 control-label">Venta</label>
                           <div class="c-8">
                              <input type="text" id="FCH_ULTVTA" name="FCH_ULTVTA" value="<?php echo $f_ultvta;?>">
                           </div>
                        </div>
                        <div class="form-group c-4">
                           <h3>Costos</h3>
                           <label for="COSTO_PROM" class="c-4 control-label">Promedio</label>
                           <div class="c-8">
                              <input type="text" id="COSTO_PROM" name="COSTO_PROM" value="<?php echo $costo_prom;?>">
                           </div>
                           <label for="CVE_ESQIMPU" class="c-4 control-label">&Uacute;ltimo</label>
                           <div class="c-8">
                              <input type="text" id="CVE_ESQIMPU" name="CVE_ESQIMPU" value="<?php echo $pend_surt;?>">
                           </div>
                        </div>
                        <div class="form-group c-4">
                           <h3>Acumulados anuales ventas</h3>
                           <label for="VTAS_ANL_C" class="c-4 control-label">Cantidad</label>
                           <div class="c-8">
                              <input type="text" id="VTAS_ANL_C" name="VTAS_ANL_C" value="<?php echo $vtas_anl_c;?>">
                           </div>
                           <label for="VTAS_ANL_M" class="c-4 control-label">Monto</label>
                           <div class="c-8">
                              <input type="text" id="VTAS_ANL_M" name="VTAS_ANL_M" value="<?php echo $vtas_anl_m;?>">
                           </div>
                        </div>
                     </div>
                     <div id="navigation2">
                        <a href="#" class="btn-default" data-id="3">Anterior</a>
                        <a href="#" class="btn-guardar">Guardar</a>
                     </div>
                  </fieldset>
               </form>
            </div>
            <!--p class="submit">
               <button id="registerButton" type="submit">Guardar</button>
               </p-->
         </div>
      </div>

<!--POPUP-->
<div id="smoke"></div>
<div id="popup">
  <div id="popup_bar"><h3><span id="tit_table"></span><span id="btn_close">x</span></h3></div>
  <div id="mostrar"></div>
</div>
<!--/POPUP-->

      <!-- jQuery 2.1.4 -->
      <script src="assets/js/jQuery-2.js"></script>
      <!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script-->
      <script type="text/javascript" src="assets/js/sliding.form.js"></script>
      <script src="assets/js/popup.js"></script>
   </body>
</html>
