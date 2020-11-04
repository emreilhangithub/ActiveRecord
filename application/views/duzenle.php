<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Düzenleme Sayfası</title>
</head>
<body style="background-color: green">

<form action="<?php echo base_url("dbislem/update/$rows->id"); ?>" method="post">
	
	<input type="text" name="title"
	value="<?php echo $rows->title ?>" 
	>	<br> <br>

 	<textarea name="detail" cols="30" rows="10"	>
 		<?php echo $rows->detail ?>
 		</textarea><br>

 	<button type="submit">Kaydet</button>



</form>
	



</body>
</html>