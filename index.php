<!DOCTYPE html>
<?php  
 if(isset($_POST['hitung'])){
  $bil1 = $_POST['bilangan1'];
  $bil2 = $_POST['bilangan2'];
  $pilih = $_POST['pilih'];

  if($pilih){
   if($bil1 == "" || $bil2 == ""){
    ?> <script>alert("Nilai nya belum diisi!"); </script> <?php
   }elseif($pilih == '+'){
    $hasil = $bil1 + $bil2;
   }elseif($pilih == '-'){
    $hasil = $bil1 - $bil2;
   }elseif($pilih == '*'){
    $hasil = $bil1 * $bil2;
   }elseif($pilih == '/'){
    $hasil = $bil1 / $bil2;
   }
  }
 }
?>
<html>
<head>
 <title>ToxicMalaya</title>
</head>
<body>
<form action="" method="POST">
	<table border="1" cellpadding="0" cellspacing="0" align="center">
			<td><table border="0" cellpadding="10" cellspacing="10">
				<tr>
					<td colspan="3"><center>Kalkulator ToxicMalaya</center></td>
				</tr>
				<tr>
					<td>Bilangan 1</td>
					<td> : </td>
					<td><input type="text" name="bilangan1"></td>
				</tr>
				<tr>
					<td>Bilangan 2</td>
					<td> : </td>
					<td><input type="text" name="bilangan2"></td>
				</tr>
				<tr>
					<td align="center">
						<select name="pilih" style="width: 100px">
						  <option value="+">+</option>
						  <option value="-">-</option>
						  <option value="*">X</option>
						  <option value="/">/</option>
						</select>
					</td>
					<td> : </td>
					<td>
						<?php if(isset($_POST['hitung'])){ ?>
							<input type="text" value="<?php echo $hasil; ?>" class="bil">
						<?php }else{ ?>
							<input type="text" value="0" class="bil">
						<?php } ?>	
					</td>
				</tr>
				<tr><td>&nbsp;</td><td>&nbsp;</td><td colspan="2"><input type="submit" value="Hitung" name="hitung" align="center"><input type="reset" value="Reset"></td></tr>
			</table></td>
		</table>
 </form>
</body>
</html>

