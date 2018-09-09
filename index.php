<?
$koneksi=mysql_connect ("localhost","root","");
mysql_select_db("pegawai");
$query="select * from datapegawai";
$hasil=mysql_query($query);
while ($row=mysql_fetch_row($hasil)) {
	# code...
	echo $row[0]."-".$row[1]."-".$row[2]."-".$row[3]."<br>";
}
mysql_close($koneksi)
?>