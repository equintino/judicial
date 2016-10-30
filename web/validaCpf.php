<?php
  echo "Validador de CPF";
  echo "<br>";
  /// fazer o cauculo com os nove primeiros digitos ///
  function primeiroDigito($cpf){
   $cpf=preg_replace('/[^0-9]/','', $cpf);
   $nove=substr($cpf,0,9);
   $cadadigito=$cpf[8];
   // 1  2  3  4  5  6  7  8  9
   // x  x  x  x  x  x  x  x  x
   // 10 9  8  7  6  5  4  3  2
   $y=10;
   for($x=0;$x<9;$x++){
    $mult[]=$cpf[$x]*$y;
    $y--;
   }
   $soma1=array_sum($mult);
   $dig1=$soma1/11;
   $valor=round(strchr($dig1,'.')*11);
   //echo $valor;
   if($valor > 1){
    $primeiroDigito=11-$valor;
   }else{
    $primeiroDigito=0;
   }
   //echo $primeiroDigito;die;
   ///// segundo digito /////
   // 1  2  3  4  5  6  7  8  9  10
   // x  x  x  x  x  x  x  x  x  x
   // 11 10 9  8  7  6  5  4  3  2
   $dez=$nove.$primeiroDigito;
   $y=11;
   for($x=0;$x<10;$x++){
    $mult_[]=$dez[$x]*$y;
    $y--;
   }
   $soma2=array_sum($mult_);
   $dig2=$soma2/11;
   $valor_=round(strchr($dig2,'.')*11);
   if($valor_ > 1){
    $segundoDigito=11-$valor_;
   }else{
    $segundoDigito=0;
   }  
   return $primeiroDigito.$segundoDigito;   
  }
  //echo "<script>cpf=prompt('Entre com seu cpf','digite aqui')</script>";
  //$cpf="<script>document.write(cpf)</script>";
  //echo $cpf;
  echo primeiroDigito('409.708.099-72');
?>

