<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>İnsert Sayfası</title>
</head>
<body style="background-color: green">

<form action="<?php echo base_url(); ?>dbislem/insert" method="post">
	
	<input type="text" name="title" placeholder="isim giriniz">	<br> <br>
 	<textarea name="detail" cols="30" rows="10"
 	placeholder="acıklama giriniz">
 		</textarea><br>

 	<button type="submit">Kaydet</button>



</form>
	



</body>
</html>