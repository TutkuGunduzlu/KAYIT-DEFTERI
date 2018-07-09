<?php
// try-catch ile veritabanına bağlantının yapılması PDO kullanılarak sağlandı.

try {
     $db = new PDO("mysql:host=localhost; dbname=rehber", "root", "");
	
	 // Veritabnında Türkçe karekterlerin düzgün gösterilmesi için ayar yapıldı.
	 $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
	 
// Bağlantı başarısız ise uyarı mesajı verilecek.

} catch ( PDOException $e ){
	echo "Veri Tabanına Bağlanamadı.: ";
     print $e->getMessage();
}
?>
