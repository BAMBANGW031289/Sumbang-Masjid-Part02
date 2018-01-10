<html>
</body>
<h1><center>Komentar Anda </center> </h1>
<?php
//membuat koneksi ke database
$conn=mysql_connect("localhost", "", "root");
mysql_select_db("masjiddb");
//membuat query select
$sql="select * from pesan";
//membaca data
$hasil=mysql_query($sql);
//menampilkan data
while($row=mysql_fetch_array($hasil)){
//menampilkan field nama
echo "Nama : ".$row['nama']; 
//menampilkan field email
echo "<br>Email : ".$row['email'];
//menampilkan field komentar
echo "<br>Komentar ; ".$row['pertanyaan'];
echo "<hr>";
}
?>
</body>
</html>