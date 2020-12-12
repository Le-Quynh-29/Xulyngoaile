<?php
class DivideByZero extends Exception{
    public function __toString()
    {
      return "can't divide by zero ";
    }
}
function divide($numerator, $denominator){
    if($denominator === 0 ){
        throw new DivideByZero();
    }
    return "Ket qua cua phep chia: ".$numerator/$denominator."<br/>";
}

try{
    $result = divide(100,2);
    echo $result;
    $result = divide(200,0);
    echo $result;
}
catch (DivideByZero $e){
    echo "Co loi xay ra: ".$e;
}