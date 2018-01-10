<?php

include 'koneksi.php';

$nama = mysql_real_escape_string($_POST['nama']);
$email = mysql_real_escape_string($_POST['email']);
$telepon = mysql_real_escape_string($_POST['telepon']);

$target_dir = "konfirm/";
$target_file = $target_dir . basename($_FILES["bukti"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

$filename = md5(uniqid()) . '.' . $imageFileType;
$target_file = $target_dir . $filename;
$query = "INSERT INTO konfirmasi(nama, email, telepon, struk) VALUES('$nama', '$email', '$telepon', '$filename')";
$result = mysql_query($query);
if ($_FILES["bukti"]) {
    if (mysql_affected_rows() > 0) {
        $check = getimagesize($_FILES["bukti"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
            if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file)) {
                echo "<script>
                alert('Konfirmasi telah dikirim!');
            </script>";
                echo "<script>
                window.location.href = 'index.php';
            </script>";
            } else {
                echo "<script>
                alert('Konfirmasi gagal dikirim!');
            </script>";
                echo "<script>
                window.location.href = 'konfirmasi.php';
            </script>";
            }
        } else {
            echo "<script>
            alert('File yang diupload bukan gambar!!!.');
        </script>";
            echo "<script>
            window.location.href = 'konfirmasi.php';
        </script>";

            $uploadOk = 0;
        }
    } else {
        echo "<script>
            alert('Gagal mengirim konfirmasi!!!.');
        </script>";
        echo "<script>
            window.location.href = 'konfirmasi.php';
        </script>";
    }
} else {
    echo "<script>
            alert('Anda belum memasukan bukti pembayaran!!!.');
        </script>";
    echo "<script>
            window.location.href = 'konfirmasi.php';
        </script>";
}
?>
