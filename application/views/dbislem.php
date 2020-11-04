<!DOCTYPE html>
<html>
<head>
	<title>Personel Listesi</title>
</head>
<body>

<h3> Personel Listesi </h3>
<a href="<?php echo base_url() ?>/dbislem/insertpage">Personel Ekle</a>

<table border="1">
	<thead>
		<th>Ad</th>
		<th>Soyad</th>
		<th>Açıklama</th>
		<th>İşlem</th>
	</thead>

	<tbody> 

		<?php foreach ($baglanti as $bag ) { ?>
		<tr>
			<td><?php echo $bag->id ?> </td>
			<td><?php echo $bag->title ?> </td>
			<td><?php echo $bag->detail ?> </td>
			<td> 
				<a href="<?php echo 
				base_url("dbislem/editPage/$bag->id"); ?>">
				Düzenle</a>
				
				<a href="<?php echo 
				base_url("dbislem/delete/$bag->id"); ?>">
				Sil	</a>
			</td>
		</tr>
		<?php } ?> 
	</tbody>
	
</table>

 






	

</body>
</html>