<?php
include 'koneksi.php';
session_start();
$act = $_GET['act'];
if ($act == 'add') {
    if (isset($_GET['id'])) {
        $id = mysql_real_escape_string($_GET['id']);
        $query = "SELECT * FROM material WHERE idmaterial='$id';";
        $result = mysql_query($query);
        if (mysql_num_rows($result) > 0) {
            $r = mysql_fetch_array($result);
            $_SESSION['cart'][$r['idmaterial']] += 1;
            header("Location: cart.php");
        } else {
            echo "<script>
            alert('Material tidak dikenal!!!.');
        </script>";
            echo "<script>
            window.location.href = 'material.php';
        </script>";
        }
    } else {
        echo "<script>
            alert('Material tidak diset!!!');
        </script>";
        echo "<script>
            window.location.href = 'material.php';
        </script>";
    }
} elseif ($act == 'delete') {
    unset($_SESSION['cart']);
    echo "<script>
            alert('Keranjang belanja dikosongkan!');
        </script>";
    echo "<script>
            window.location.href = 'cart.php';
        </script>";
}
?>