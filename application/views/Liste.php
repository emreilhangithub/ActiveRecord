<!DOCTYPE html>
<html>
<head>
	<title>Personel Listesi</title>
</head>
<body>

	

<h3>Personel Listesi</h3>
<hr>

<a href="<?php echo base_url('insertPage') ?>">Personel Ekle</a> <br> <br>

<table border="1">
	
	<thead>
		<th>İd</th>
		<th>İsim</th>
		<th>Soyisim</th>
		<th>Yas</th>
		<th>Mail</th>
		<th>Durum</th>
	</thead>

<?php foreach ($listele as $liste) { ?>
	<tbody>
		
		<tr>
			<td><?php echo $liste->id ?></td>
			<td><?php echo $liste->isim ?></td>
			<td><?php echo $liste->soyisim ?></td>			
			<td><?php echo $liste->yas ?></td>			
			<td><?php echo $liste->mail ?></td>			
			<td>
				<a href="<?php echo base_url("Liste/editPage/$liste->id") ?>">Düzenle</a>
				<a href="<?php echo base_url("Liste/delete/$liste->id") ?>">Sil</a>					
			</td>
		</tr>

	</tbody>
<?php } ?>

</table>



</body>
</html>