<?php
	
	// rehber.php sayfasındaki veriye erişmek için bir session başlatıldı.
	session_start();
	
	 // Veritabanına bağlandı.
	include ("bagla.php");
	
		// Veri post metodu yardımı ile alındı ve yeni bir değişkene atandı.
		$_SESSION["ad"] = $_POST["ara"];
		$ad = $_SESSION["ad"]  ;
		
		// Büyük harfe çevrildi.
		$ad = mb_strtoupper($ad);

			// Eğer isim girilmemişse uyarı verilip anasayfaya yönlendirildi.
			if (empty($ad) ) {
     echo " Lütfen İsim Alanını Boş Bırakmayınız. <br/> 3 saniye sonra anasayfaya yönlendirileceksiniz... ";
	 echo " <meta http-equiv='refresh' content=3;URL=index.html> ";  
	
		}
		else {
		
		// Girilen isim veritabanında var mı diye bakıldı.
		$query = $db->prepare("SELECT * FROM kisiler WHERE ad = ? ");
		$query->execute(array( $ad ) ) ;
		
		// Eğer varsa rowCount=1 olur vekayıt bulunmuş olur.
 		if ( $say = $query -> rowCount() ){
			if( $say > 0 ){
				// Kayıt ismi ekrana yazdırılır.
				echo "İşlem Yapılacak Kişi : ".$ad ;
		
// Sil/Güncelle işlemleri link olarak eklenir.
// Sil'e tıkladığında sil.php ye giderek silme işlemini yapar.
// Güncelle'ye tıkladığında guncelle.html ye giderek gücelleme işlemini yapar.	
echo '
	<br/><br/>
	
     <a href="sil.php">Sil</a>

     <a href="guncelle.html">Güncelle</a>
  
' ;
				}
	}
	
	//  Fakat yoksa rowCount=0 olur ve kayıt bulunamaz. Ekrana uyarı verir.
	else
	  echo "Kişi Bulunamadı. <br/> 3 saniye sonra anasayfaya yönlendirileceksiniz... <meta http-equiv='refresh' content=3;URL=index.html> ";
		}
?>
