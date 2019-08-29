<?php
$titulo='Productos';
$query = $db->query("SELECT * FROM dbo.INVE01 WHERE CVE_ART='ACCESS3COM3CRWE7'");
$n=0;$productos='';
$query->execute();
while($row = $query->fetch(PDO::FETCH_ASSOC)){$n++;
  /*DATOS  GENERALES*/
  //CVE_ART,DESCR,CVE_IMAGEN,LIN_PROD,TIEM_SURT,CTRL_ALM,UNI_MED,UNI_ALT,UNI_EMP,FAC_CONV,VOLUMEN,PESO,CON_SERIE,CON_LOTE,CON_PEDIMENTO
  $clave=$row['CVE_ART'];
  $descr=$row['DESCR'];
  $cve_ima=$row['CVE_IMAGEN'];
  $des=htmlentities($descr, ENT_COMPAT,'ISO-8859-1', true);//Correccion de acentos en string
  $linea=$row['LIN_PROD'];
  $t_sur=$row['TIEM_SURT'];
  $c_alm=$row['CTRL_ALM'];
  $unidad=$row['UNI_MED'];
  $uni_sal=$row['UNI_ALT'];
  $uni_emp=$row['UNI_EMP'];
  $factor=$row['FAC_CONV'];
  $volumen=$row['VOLUMEN'];
  $peso=$row['PESO'];
  $serie=$row['CON_SERIE'];
  $lote=$row['CON_LOTE'];
  $pedimento=$row['CON_PEDIMENTO'];

  /*PRECIOS*/
  //NUM_MON,TIP_COSTEO,EXIST,STOCK_MIN,STOCK_MAX,APART
  //setlocale(LC_MONETARY,"es_MX");
  //$moneda=money_format("%.2n", $row['NUM_MON']);
  $moneda=number_format($row['NUM_MON'], 2, '.', '');//formateo de numero a solo 4 decimales
  $t_costeo=$row['TIP_COSTEO'];
  $exist=$row['EXIST'];
  $s_min=$row['STOCK_MIN'];
  $s_max=$row['STOCK_MAX'];
  $apart=$row['APART'];

  /*IMPUESTOS*/
  //CVE_ESQIMPU
  $cve_impuesto=$row['CVE_ESQIMPU'];

  /*REGISTROS*/
  //PEND_SURT,COMP_X_REC,COMP_ANL_M,VTAS_ANL_C,VTAS_ANL_M,COSTO_PROM,FCH_ULTCOM,FCH_ULTVTA
  $pend_surt=$row['PEND_SURT'];
  $comp_x_rec=$row['COMP_X_REC'];
  $comp_anl_m=$row['COMP_ANL_M'];
  $vtas_anl_c=$row['VTAS_ANL_C'];
  $vtas_anl_m=$row['VTAS_ANL_M'];
  $costo_prom=number_format($row['COSTO_PROM'], 4, '.', '');//formateo de numero a solo 4 decimales
  $f_ultcom=substr($row['FCH_ULTCOM'], 0, 10);
  $f_ultvta=substr($row['FCH_ULTVTA'], 0, 10);

}

$ima=($cve_ima!='' && $cve_ima!='')?$cve_ima:'nodisponible.png';
$ser=($serie!='S')?'':'checked';
$lot=($lote!='S')?'':'checked';
$ped=($pedimento!='S')?'':'checked';

$ueps='';
$peps='';
$est='';
$ide='';

switch(true){
  case($t_costeo=='U'):
  $ueps='checked';
  break;
  case($t_costeo=='P'):
  $peps='checked';
  break;
  case($t_costeo=='E'):
  $est='checked';
  break;
  case($t_costeo=='I'):
  $ide='checked';
  break;
  default:
$ueps='';
$peps='';
$est='';
$ide='';
  break;
}

function impuestos(){
global $query,$db;$n=0;$t_impu='';
  $query = $db->query("SELECT * FROM dbo.IMPU01");
  $query->execute();
  while($row = $query->fetch(PDO::FETCH_ASSOC)){$n++;//$imp[]=$row;
      $st=($n % 2 == 0)?'rgris':'sin';
      $t_impu.='<tr class="'.$st.'"><td class="t-center">'.$row['CVE_ESQIMPU'].'</td><td>'.$row['DESCRIPESQ'].'</td></tr>';
  }
return '<table id="timpu"><tr><th>Clave</th><th>Descripci&oacute;n</th></tr>'.$t_impu.'</table>';
}

?>
