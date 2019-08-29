<?php
include 'conexion_SQL2.php';
?>
<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen"/>
<?php
$opc=$_GET['opc'];
switch (true) {
  case ($opc==1):
    echo impuestos();
  break;

  default:
    // code...
  break;
}
?>
