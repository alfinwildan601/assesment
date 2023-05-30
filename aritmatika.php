<?php

class Aritmatika{
     public $x;
     private $y;
     protected $hasil;

     
 public function setx($x){
    $this->x = $x;
    return $x;

 }
 public function sety($y){
    $this->y = $y;
    if($this->y == ""){
        return "data harus diisi";
    }else{
    return $y;
    }

 }
    public function setTambah($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x + $this->y;
        return $hasil;
    }
    public function setKali($x,$y){
        $this->x =$x;
        $this->y =$y;
        $hasil = $this->x * $this->y;
        return $hasil;
    }
    public function setKurang($x,$y){
        $this->x =$x;
        $this->y =$y;
        $hasil = $this->x - $this->y;
        return $hasil;
    }
    public function setBagi($x,$y){
        $this->x =$x;
        $this->y =$y;
        if ($y && $x !=0){
         return   $hasil = $this->x / $this->y;
        } else {
         return   $hasil = "Angka tidak bisa dibagi nilai Nol silahkan coba angka lain";
        }
}


}


?>