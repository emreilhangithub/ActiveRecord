<!DOCTYPE html>
<html>
<head>
	<title>Personel Ekleme Sayfası</title>
</head>
<body>


	<h3>Personel Ekleme Sayfası</h3>

	<form action="<?php echo base_url("Liste/insert") ?>" method="post"> 

	<span> İsim = </span> <input type="text" name="isim" placeholder="isim Giriniz" align="right"> <br>
	<span> Soyisim = </span> <input type="text" name="soyisim" placeholder="soyisim Giriniz"> <br>
	<span> Yas = </span> <input type="text" name="yas" placeholder="yas Giriniz"> <br>
	<span> Mail = </span> <input type="email" name="mail" placeholder="mail Giriniz"> <br><br>

	<button>Ekle</button>

	</form>

</body>
</html>