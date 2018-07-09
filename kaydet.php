
    <?php 
	// Veritabanıı bağlama işlemi yapıldı.
	include ("bagla.php");
	
        // Form verini gönderilip gönderilmediği kontrol edildi.
        if($_POST){
        
            // Formdan gelen veriler post metodu ile yeni değişkenlere atandı.
            $ad      =    $_POST["ad"];
            $mobilNo  =    $_POST["mobilNo"];
            $evNo     =    $_POST["evNo"];
            $eposta    =    $_POST["eposta"];
           
		       // Gelen "ad" verisi büyük harfe çevrildi. Çünkü veritabanında isimlerin büyük harflerden oluşacak şekilde tutulmasını istedim.
			   $ad      =   mb_strtoupper($ad  );
		
			// Eğer text'lerin birine bile veri girilmezse  uyarı verip kayıt ekranına yönlendirecek.
			if (empty($ad) || empty($mobilNo) || empty($evNo) || empty($eposta)  ) {
				 die( " Lütfen Tüm Alanları Doldurunuz. <br/> 5 saniye sonra kayıt ekranına yönlendirileceksiniz...  <meta http-equiv='refresh' content=5;URL=kayitekrani.html>");
       

    }
	
	//Girilen e-postanın doğru formatta olup olmadığı kontrol edildi.
   if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
       die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }
		// Kullanıcı tarafından girilen isimde kayıt  var mı sorgulandı.
		$query = $db->prepare("SELECT * FROM kisiler WHERE ad = ? ");
		$query->execute(array( $ad ) ) ;
		$say = $query -> rowCount() ;
		
		// Eğer o isimde bir kayıt yoksa rowCount=0 olur ve kişiyi veritabanına ekler.
		// Rehberde amaç aynı isimde farklı kayıtlar olmamasıdır. Burada bunun kontrolü yapıldı. Veritabanında da primery key 	"ad" değişkenidir.	
			if( $say == 0 ){
				
				    $ekle  =  $db -> prepare ( " INSERT INTO kisiler (ad, mobilNo, evNo, eposta) VALUES (?,?,?,? ) " ) ;
					$ekle  ->  execute ( array ( $ad, $mobilNo, $evNo, $eposta ) );

					if($ekle)
					   echo $ad." Kişisi Başarılı Bir Şekilde Eklendi.    <br/> 5 saniye sonra anasayfaya yönlendirileceksiniz...  <meta http-equiv='refresh' content=5;URL=index.html>   ";
				
				}	// Eğer kayıt zaten varsa rowCount=1 olur ve aynı isimdeki kaydı eklemez. 
				else
				      echo $ad." Kişisi Rehberde Zaten Kayıtlı ! Lütfen Farklı İsimde Kişi Kaydediniz.   <br/> 5 saniye sonra anasayfaya yönlendirileceksiniz...  <meta http-equiv='refresh' content=5;URL=index.html>   ";
		
	
         
           
        }
		
	


		
    ?>

	