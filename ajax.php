<?php 
	include("bagla.php");
	
	// Anasayfada rehberdeki kayıtlı kişilerin listelenmesi için veritabanından "ad" kısmı çekildi.
	$sql = $db->query("SELECT * FROM kisiler ");
	$count = $sql->rowCount();
	if($count > 0 ){
		
		foreach($sql as $row){
			echo $row['ad']."<br/><br/>";
		}
		
	}
?>