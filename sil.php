<?php
     // Veritabanına bağlandı.
	include ("bagla.php");
	
		// guncellesilekrani.php sayfasındaki veriye erişmek için bir session başlatıldı.
		session_start();
		
		// Veri alındı ve yeni değişkene atandı.
		$ad=$_SESSION["ad"];
		
		// Büyük harfe çevrildi.
		$ad = mb_strtoupper($ad);
		
		// Silmek için aranan ad'la ilgili SQL Sorgusu yazıldı.
		$sorgu = $db -> prepare ( "DELETE FROM kisiler WHERE ad = ? " );
	    $sorgu -> execute ( array ( 	$ad ) );
		
		// Kişi rehberde mevcutsa silme işlemi gerçekleşir.
		if ( $sorgu )
			echo $ad."  Kişisi Silindi.   <br/> 5 saniye sonra anasayfaya yönlendirileceksiniz...  <meta http-equiv='refresh' content=5;URL=index.html> " ;
	
	
?>

