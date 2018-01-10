<?php
include 'koneksi.php';

$nama = mysql_real_escape_string($_POST['nama']);
$email = mysql_real_escape_string($_POST['email']);
$telepon = mysql_real_escape_string($_POST['telepon']);
$pesan = mysql_real_escape_string($_POST['pesan']);

$query = "INSERT INTO pesan (nama, email, telepon, pertanyaan) VALUES('$nama', '$email', '$telepon', '$pesan');";
$result = mysql_query($query);
if(mysql_affected_rows() > 0){
    echo "<script>
            alert('Pesan anda telah terkirim!!!.');
        </script>";
            echo "<script>
            window.location.href = 'kontak.php';
        </script>";
} else {
    echo "<script>
            alert('Pesan anda gagal terkirim!!!.');
        </script>";
            echo "<script>
            window.location.href = 'kontak.php';
        </script>";
}