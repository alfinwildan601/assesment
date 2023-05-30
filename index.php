<center>
     <H1> Hitung </H1>
<form method="POST">
   <input type="text" name="x"   placeholder="Input x" size="4"> &nbsp;
   <select name="operasi">
    <option value="tambah"> + </option>
    <option value="kali"> x </option>
    <option value="kurang"> - </option>
    <option value="bagi"> / </option>
  </select> &nbsp;
     <input type="text" name="y"  placeholder="Input y" size="4"> &nbsp;
     <label>=</label> &nbsp;
    <input type="submit" value="hitung">
 </form>
 <?php
include "aritmatika.php";
$kalku = new Aritmatika;

 

if ($_POST) {

    $x = $_POST['x'];
    $y = $_POST['y'];
// if($_POST['x,y'] == ""){
//     echo "data masih kosong";
// }
    if ($_POST['operasi'] == "tambah"){
        echo "Hasil : ".$x." + ".$y." = ".$kalku->setTambah($x,$y)."<br /><br />";
    }
      elseif ($_POST['operasi'] == "kali") {
        echo "Hasil : ".$x." x ".$y." = ".$kalku->setKali($x,$y)."<br /><br />";
    }elseif ($_POST['operasi'] == "kurang") {
        echo "Hasil : ".$x." - ".$y." = ".$kalku->setKurang($x,$y)."<br /><br />";
    } elseif ($_POST['operasi'] == "bagi") {
        echo "Hasil : ".$x." / ".$y." = ".$kalku->setBagi($x,$y)."<br /><br />";
    }
    

}
?>
