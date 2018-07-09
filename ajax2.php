<?php 
	include("bagla.php");
	
	// Listele butonuna basıldığında  rehberdeki kayıtlı kişilerin tüm bilgileri veritabanından çekildi.
	$sql = $db->query("SELECT * FROM kisiler ");
	$count = $sql->rowCount();
	if($count > 0 ){
		
		foreach($sql as $row){
		echo $row['ad']  ."---". $row['mobilNo'] . "---". $row['evNo'] . "---". $row['eposta'] . "<br/> <br/>";
			
		}
		
	}
?>