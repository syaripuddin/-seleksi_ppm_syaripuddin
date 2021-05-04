<?php 
 function cetak($num)
 {
      if($num>1)
      cetak($num-1);
      $num%2==0? $bil="Genap": $bil="Ganjil";
      echo $num.". Bilangan $bil<br>";
      return;
 }
 
 echo'Bilangan genap ganjil dengan fungsi';e
 cetak(10);

?>