<html>
<head>
<title>Input Data Mahasiswa</title>
</head>
<body bgcolor="lavender">
<form action="tampilmahasiswa.php" method="post">
<b>Pengelolaan Data Mahasiswa</b>
<br>
<pre>
Nama          : <input type="text" name="nama" size="22"
maxlength="50">
Alamat        : <input type="text" name="alamat" size="22"
maxlength="50">
</pre>
Jenis Kelamin  :
<input type="radio" name="jeniskel" value="Laki-Laki"> Laki -
Laki
<input type="radio" name="jeniskel" value="Perempuan">
Perempuan
<p>
Pekerjaan     :
<select name="pekerjaan">
<option value="-Pilih-">
<option value="Mahasiswa">Mahasiswa
<option value="Karyawan">Karyawan
<option value="Wirausaha">Wirausaha
<option value="Lain-lain">Lain-lain
</select>
<p>
Hobi          :
<input type="checkbox" name="hobi1"
value="Olahraga">Olahraga
<input type="checkbox" name="hobi2" value="Nonton Film">Nonton Film
<input type="checkbox" name="hobi3" value="Travel">Travel
<p>
<input type="submit" value="Kirim"><input type="reset"
value="Batal">
</form>
</body>
</html>
