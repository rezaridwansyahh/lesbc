<?php
/**
 * Class Alamat Tinggal
 */
class Alamat
{
  public $alamat_jalan;
  public $namanegara;
  function __construct($param1,$param2)
  {
    $this->alamat_jalan = $param1;
    $this->namanegara = $param2;
  }

  public function tampilkan(){
    $output ="Hallo";
    return $output;
  }

  private function fuck(){
    echo "fuck";
  }

  public function bungkus(){
    $this->fuck();
  }

  public function setget($param){
    $this->alamat_jalan = $param;
    return $this->alamat_jalan;
  }
}
$alamats = new Alamat("puyuh raya","indonesia");
echo $alamats->tampilkan();
echo $alamats->bungkus();
echo $alamats->alamat_jalan;
 ?>
