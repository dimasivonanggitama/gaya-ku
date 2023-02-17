<html>
<head>
<style>
.container{
	background-color: #ffffff;
	position: fixed;
	width: 75%;
	height: 600px;
	top:5%;
	left:12.5%;
	border-style: solid;
	border-width: 1px;
}

.judul{
	background-color: #ffffff;
	position: absolute;
	width: 100%;
	border-style: solid;
	border-width: 0px 0px 1px 0px;
	height: 60px;
	
}

.judul h3{
	padding-left: 20px;
}

.isi {
	position: absolute;
	width: 75%;
	background-color: #ffffff;
	height: auto;
	top: 90px;
	left: 12.5%;
}

.headerDetil{
	background-color: #ffffff;
	height :50px;
	border-style: solid;
	border-width: 0px 0px 1px 0px;
}

.headerDetil h3{
	padding-top: 15px;
	padding-left: 20px;
}

.headerKontak {
	background-color: blue;
	height: 50px;
}

.headerKontak h3{
	padding-top: 15px;
	padding-left: 20px;
}

textarea{
	resize: none;
}
</style>
</head>
<body>
	<div class="container">
		<form enctype="multipart/form-data" method="post"	action="insertIklan.php">
		<div class="judul">
		<h3>Pasang Iklan</h3>
		</div>
		<div class="isi">
			<div class="headerDetil">
				<h3>Detil Iklan</h3>
			</div>
				<br>Judul Iklan<br><input type="text" name="judul"/><br>
				<br>Kategori<br><select name="kategori">
				<option value="">Pilih Kategori</option>
				<option value="koko">Baju Koko</option>
				<option value="celana">Celana</option>
				<option value="hijab">Hijab</option>
				<option value="gamis">Gamis</option>
				</select><br>
				<br>Harga<br><input type="text" name="harga"/><br>
				<br>Deskripsi Iklan<br>
				<textarea name="deskripsi" cols="50" rows="5"></textarea><br>
				<br>Upload Foto<br>
				<input type="file" name="img1"><br>
				<!--<input type="file" name="image2"><br>
				<input type="file" name="image3"><br> -->
				<br><center><input type="submit" value="Simpan"/>
		</div>
	</form>
	</div>
</body>
</html>