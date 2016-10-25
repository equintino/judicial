<?php
final class JudiValidator {

    private function __construct() {
    }
    public static function validate(Todo $todo) {
        $errors = array();
        if (!$todo->getCreatedOn()) {
            $errors[] = new Error('createdOn', 'Empty or invalid Created On.');
        }
        if (!$todo->getLastModifiedOn()) {
            $errors[] = new Error('lastModifiedOn', 'Empty or invalid Last Modified On.');
        }
        if (!trim($todo->getPriority())) {
            $errors[] = new Error('priority', 'Priority cannot be empty.');
        } elseif (!self::isValidPriority($todo->getPriority())) {
            $errors[] = new Error('priority', 'Invalid Priority set.');
        }
        if (!trim($todo->getStatus())) {
            $errors[] = new Error('status', 'Status cannot be empty.');
        } elseif (!self::isValidStatus($todo->getStatus())) {
            $errors[] = new Error('status', 'Invalid Status set.');
        }
        return $errors;
    }
    public static function validateStatus($status) {
        if (!self::isValidStatus($status)) {
            throw new Exception('Unknown status: ' . $status);
        }
    }
    public static function validatePriority($priority) {
        if (!self::isValidPriority($priority)) {
            throw new Exception('Unknown priority: ' . $priority);
        }
    }

    private static function isValidStatus($status) {
        return in_array($status, Todo::allStatuses());
    }

    private static function isValidPriority($priority) {
        return in_array($priority, Todo::allPriorities());
    }
    public static function nomeMes($mes){
       switch ($mes){
         case 1:
          $mes="JANEIRO";
          break;
         case 2:
          $mes="FEVEREIRO";
          break;
         case 3:
          $mes="MARCO";
          break;
         case 4:
          $mes="ABRIL";
          break;
         case 5:
          $mes="MAIO";
          break;
         case 6:
          $mes="JUNHO";
          break;
         case 7:
          $mes="JULHO";
          break;
         case 8:
          $mes="AGOSTO";
          break;
         case 9:
          $mes="SETEMBRO";
          break;
         case 10:
          $mes="OUTUBRO";
          break;
         case 11:
          $mes="NOVEMBRO";
          break;
         case 12:
          $mes="DEZEMBRO";
          break;
       }
       return $mes;
    }
    public static function mask($val, $mask){
        $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++){
	 if($mask[$i] == '#'){
            if(isset($val[$k]))
                $maskared .= $val[$k++];
         }else{
            if(isset($mask[$i]))
            $maskared .= $mask[$i];
         }
        }
	 return $maskared;
    }
    public static function data($data){
        $ano=substr($data,0,4);
        $mes=substr($data,5,2);
        $dia=substr($data,8,2);
        
        $data="$dia/$mes/$ano";
        return $data;
        //print_r(substr($data,8,2));die;
    }
    public static function tirarAcento($string){  
      return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","_ _ _ _ _ _ _ _ _ _ _ _ _ _"),$string);
    }
    public static function tirarAcento2($string){  
      return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","% % % % % % % % % % % % % %"),$string);
    }
    public static function removePonto($dado){
        $dado_=preg_replace('#[^0-9]#', '', $dado);
        return $dado_;
    }
    public static function trocavirgula($dado){
     //echo "<pre>";
     //print_r($dado);
     //print_r(stripos($dado,','));die;
     if(strpos($dado,',')){
        $dado_=str_replace(',','.',preg_replace('#[.]#', '', $dado)); 
     }else{
         $dado_=$dado;
     }
     //print_r($dado_);
        return $dado_;
    }
    public static function colocavirgula($dado){
        $dado_=str_replace('.',',',$dado);
        //echo number_format($dado_,'2',',','.');die;
        return $dado_;
    } 
    public static function validaCpf($cpf){
     if($cpf != null){
        $cpf=preg_replace('/[^0-9]/','', $cpf);
        $nove=substr($cpf,0,9);
        //$cadadigito=$cpf[8];
        // 1  2  3  4  5  6  7  8  9
        // x  x  x  x  x  x  x  x  x
        // 10 9  8  7  6  5  4  3  2
        $y=10;
        $mult=array();
        for($x=0;$x<9;$x++){
         $mult[]=$cpf[$x]*$y;
         $y--;
        }
        //echo "<pre>";
        //print_r($mult);die;
        $soma1=array_sum($mult);
        $dig1=$soma1/11;
        $valor=round(strchr($dig1,'.')*11);
        if($valor > 1){
         $primeiroDigito=11-$valor;
        }else{
         $primeiroDigito=0;
        }
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
        //echo "$cpf - ";
        //print_r($primeiroDigito.$segundoDigito);
        //echo "<br>";
        return $primeiroDigito.$segundoDigito;  
     }
  }
}
?>