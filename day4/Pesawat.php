<?php
/**
 *Class Pesawat
 */

class Pesawat extends Kendaraan
{
  private $tinggiMaks;
  private $kecepatanMaks;
  // function __construct(argument)
  // {
  //
  // }
  public function setTinggiMaks($param){
    $this->tinggiMaks = $param;
  }
  public function setKecepatanMaks($param){
    $this->kecepatanMaks = $param;
  }
  public function bacaTinggiMaks(){
    return $this->tinggiMaks;
  }
  public function bacaKecepatanMaks(){
    return $this->kecepatanMaks;
  }
  public function biayaOperasional($tinggi,$kecepatan,$harga){
    $biop=0;
    if($tinggi>5000 && $kecepatan>800){
    }elseif (($tinggi>=3000 && $tinggi<=5000)&&($kecepatan>=500 && $kecepatan<=800)) {
      // 20% dari hargapesawat;
         $biop = $harga - ($harga*0.2);
    }elseif ($tinggi<3000 && $kecepatan<500) {
      // 10%;
         $biop = $harga - ($harga*0.1);
    }else {
      // 5%;
         $biop = $harga - ($harga*0.05);
    }
    return $biop;
  }

}
 ?>
