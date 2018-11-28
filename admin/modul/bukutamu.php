<!DOCTYPE html>  
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../tinymce/tinymce/tiny_mce.js">
		
	</script>
	<script type="text/javascript">
		tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		 
		});
	</script>
</head>
<body>
	<div id="container">
		<h2>Buku Tamu</h2>
		<hr>
		<p>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>
		<form action="aksi.php?module=bukutamu&act=inputtamu" method="post">
			<p><b>Id :</b><br><input type="text" name="id_bktamu" placeholder="Ketik id anda" required /></p>
			<p><b>Status :</b><br><input type="text" name="status_bktamu" placeholder="Ketik status anda" required /></p>
			<p><b>Nama :</b><br><input type="text" name="nama_bktamu" placeholder="Ketik nama anda" /></p>
			<p><b>Email :</b><br><input type="text" name="email_bktamu" placeholder="Ketik email anda" /></p>
			<p><b>Alamat :</b><br><input type="text" name="alamat_bktamu" placeholder="Ketik alamat anda" /></p>
			<p><b>Tanggal : </b></p><input type="date" name=”tgl_bktamu”>
			<p><b>Komentar :</b><br><textarea name="komentar"></textarea></p>
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
		</form>
	</div>
</body>
</html>

