<!DOCTYPE html>
<html>
<head>
     <title>pemogramana3.com</title>
</head>
<?php
// koneksi database
include 'koneksi.php';
// menangakap data yang di kirim dari form
 if(!empty($_POST['save'])){
	 
$Nama = $_POST['Nama'];
$Password = $_POST['Password'];
$level = $_POST['level'];
$status = $_POST['status'];
// menginput data ke database
$a=mysqli-query($koneksi,"insert into user values9'','$Nama','$Password','$level','$stataus')");
 if($a){
	 // mengalihkan halaman kembali 
	 header("location:tampil_user.php");
 }else{
	 echo mysqli_error();
 }
 }
 
 ?>
<body>
    <h2>Pemograman 3 2022</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA USER</h3>
	<from method="POST">
	    <table>
		    <tr>
			    <td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
			    <td>Paswword</td>
				<td><input type="number" name="Paswword"></td>
			</tr>
			<tr>
			    <td>level</td>
				<td><select name="level">
				       <option value="">-----Pilih</option>
					    <option value="1">Admin</option>
						<option value="2">Staff</option>
						<option value="3">Spv</option>
						<option value="4">Mgr</option>
				</select>
				</td>
			</tr>
			<tr>
			    <td></td>
				<td><input type="submit" name="save"></td>
			</tr>
		</table>
	</from>
</body>
</html>