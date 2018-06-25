
	
<h1 align="center">NOTA LAUNDRY</h1>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$tgl = $_POST['tgl'] ;
$bln = $_POST['bln'] ;
$thn = $_POST['thn'] ;
$berat = $_POST['berat'];
$pil_pak = $_POST['pil_pak'];
$hasil;
$antar;
if(empty($nama)||empty($alamat)||empty($no_hp)||empty($tgl)||empty($bln)
||empty($thn)||empty($berat)||empty($pil_pak)){
echo"<script>alert('Maaf, Masih ada yang kurang'); javascript:history.go(-1);</script>";
exit;
}
else{
echo '<div align="center">';	
echo "<table border=0>";
echo "<tr><td>Nama</td><td>:</td><td>$nama</td></tr>";
echo "<tr><td>Alamat</td><td>:</td><td> $alamat</td></tr>";
echo "<tr><td>Nomor Hp</td><td>:</td><td> $no_hp</td></tr>";
echo "<tr><td>Tanggal Masuk</td><td> :</td><td> $tgl/$bln/$thn </td></tr>";
	if ($pil_pak=="express") {
	$tgl=$tgl+1;
	$harga=9000;
	$hasil=$berat*$harga;
	}
	else{
	$tgl=$tgl+3;
	$harga=4000;
	$hasil=$berat*$harga;
	}
echo "<tr><td>Tanggal Keluar</td><td> :</td><td> $tgl/$bln/$thn </td></tr>";
if(isset( $_POST['jas_an'])){
	 $_POST['jas_an']=5000;
	 $antar=$_POST['jas_an'];
	$hasil=$hasil+ $antar;
}
else{
	 $_POST['jas_an']=0;
	 $antar=$_POST['jas_an'];
	$hasil=$hasil+ $antar;
}
echo "<table border='2'>";
echo "<tr><td>paket</td><td>kg</td><td>harga/kg</td><td>Jasa Antar</td><td>total</td></tr>";
echo "<tr><td >$pil_pak</td><td align='center'>$berat</td><td align='center'>$harga</td><td align='center'>$antar</td><td>$hasil</td></tr></table></div>";
echo "<br/>";
echo '<div align="center"><input value="Cetak" type="button" onClick="window.print()"></div> ';
echo '<div align="center"><a href="ngarep.html"><button>Selesai</button></a></div>';

}
?>