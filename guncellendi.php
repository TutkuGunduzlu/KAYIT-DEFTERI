  <?php 
  // Veritabanıı bağlama işlemi yapıldı.
	include ("bagla.php");
	// guncelleekrani.php deki veriye erişebilmek için session başlatıldı.
	session_start();
		// Güncellenecerek isim değeri yeni değişkene atandı.
		$ad2=$_SESSION['ad'];

         // Form verini gönderilip gönderilmediği kontrol edildi.
        if($_POST){
        
            // Formdan gelen kayıtlar yeni değişkenlere atandı.
            $ad      =    $_POST["ad"];
            $mobilNo  =    $_POST["mobilNo"];
            $evNo     =    $_POST["evNo"];
            $eposta    =    $_POST["eposta"];
			
				// Büyük harf çevrimi yapıldı.
				$ad = mb_strtoupper($ad );
				$ad2 = mb_strtoupper($ad2 );
         
			// Eğer text'lerin birine bile veri girilmezse  uyarı verip tekrar güncelleme ekranına yönlendirecek.
			if (empty($ad) || empty($mobilNo) || empty($evNo) || empty($eposta)  ) {
				 die( " Lütfen Tüm Alanları Doldunuz. <br/> 5 saniye sonra güncelleme ekranına yönlendirileceksiniz...  <meta http-equiv='refresh' content=5;URL=guncelle.html>");
     
    }
	
	//Girilen e-postanın doğru formatta olup olmadığı kontrol edildi.
   if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
       die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }
			// Aranan isim değerine ait kayıt text'lerden alınan yeni değerlerle güncellenecek.
            $query  =  $db -> prepare ( "UPDATE kisiler SET  ad=?, mobilNo=?, evNo=?, eposta=?  where ad= ? " ) ;
			$guncelle = $query->execute ( array ( $ad, $mobilNo, $evNo, $eposta, $ad2) ) ;

			if($guncelle)
			 echo "Başarılı Bir Şekilde Güncellendi.   <br/> 5 saniye sonra anasayfaya yönlendirileceksiniz...  <meta http-equiv='refresh' content=5;URL=index.html> ";
           
        }
		
    ?>