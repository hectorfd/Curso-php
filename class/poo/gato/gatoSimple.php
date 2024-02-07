<?php
class GatoSimple{
    public $color;
    public $raza;
    public $sexo;
    public $edad;
    public $peso;

    //Metodos
    public function maúlla(){
        echo "Miauuuuuuu <br>";
    }
    public function ronronea(){
        echo "Mrrrrrrr<br>";
    }
    //un metodo come pero el gato solo come pescado
    public function come($comida){
        if ($comida=="pescado") {
            echo "miau miua<br>";
        }else {
            echo "no quiero<br>";
        }
    }
    //poner a pelear  a dos gatos, solo se van a pelear dos gatos machos
    public function pelear($gato1,$gato2){
        if ($gato1 == $this-> sexo = "macho" and $gato2==$this->sexo = "macho") {
            echo "a pelear<br>";
        }else {
            echo "a follar<br>";
        }
    }
    public function pelearCon(GatoSimple $rival){
        if ($rival -> sexo == "hembra") {

            echo "no peleo con gatitas<br>";
        }else {
            echo "ven aquí que te doy tu madriza<br>";
        }

    }
}
$gato1 = new GatoSimple();
$gato2 = new GatoSimple();
$Alejandra = new GatoSimple();

$gato2 -> sexo = "hembra";
$Alejandra -> sexo = "macho";
$gato1 -> maúlla();
$gato1 -> ronronea();
$gato1 ->pelear("macho","hembra");
$gato1 -> pelearCon($gato2);
$gato1 -> pelearCon($Alejandra);
