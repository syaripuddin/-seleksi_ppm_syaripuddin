<?php
 		function rupiah($angka){
 			$hasil_rupiah = "Rp " .number_format($angka, 0,',','.');
 			return $hasil_rupiah;
 		}

 		$bulpoin = 1750; 
 		$uang = 5000; 

 		
 		echo "Harga 1 bulpoin = " .rupiah($bulpoin). "<br>";

 		$total = 12 * $bulpoin; 
 		echo "Total 1 lusin : 12 x Rp 1.750   = " .rupiah($total). "<br>";

 		$subtotal = 5 * $uang; 
 		echo "Uang Rian : 5 lembar * Rp 5.000 = " .rupiah($subtotal). "<br><br>";

 		$kembalian = $subtotal - $total;
 		echo "Jadi, kembaliannya adalah   : <br> Rp 25.000 - Rp 21.000 = " .rupiah($kembalian);
 ?>