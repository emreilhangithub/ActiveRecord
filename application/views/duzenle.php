<!DOCTYPE html>
<html>
<head>
	<title>Personel Bilgi Duzenleme Sayfası</title>
</head>
<body>


	<h3>Personel Bilgi Duzenleme Sayfası </h3>

	<form action="<?php echo base_url("Liste/update/$listele->id") ?>" method="post"> 

	<span> İsim = </span>  <input type="text" name="isim" placeholder="İsim Giriniz" value="<?php echo($listele->isim); ?>"> <br>
	<span> Soyisim = </span> <input type="text" name="soyisim" placeholder="Soyisim Giriniz" value="<?php echo($listele->soyisim); ?>"> <br>
	<span> Yaş = </span> <input type="text" name="yas" placeholder="Yaş Giriniz" value="<?php echo($listele->yas); ?>"> <br>
	<span> Mail = </span> <input type="email" name="mail" placeholder="Mail Giriniz" value="<?php echo($listele->mail); ?>"> <br><br>

	<button>Güncelle</button>

	</form>

</body>
</html>