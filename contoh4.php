<HTML>
<HEAD>
<TITLE> Contoh Skrip PHP </TITLE>
<BODY>
<?php
$nilai = 85;
$nama = "Anna";
if ($nilai >= 80)
	{
		echo $nama." Mendapatkan Nilai A";
	}
elseif ($nilai >=70)
	{
		echo $nama." Mendapatkan Nilai B";
	}
elseif ($nilai >=60)
	{
		echo $nama." Mendapatkan Nilai B=C";
	}
else
	{
		echo $nama." Mendapatkan Nilai D";
	}
?>
</BODY>
</HTML>