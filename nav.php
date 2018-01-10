<?php 
//error_reporting(0);
session_start();
include 'koneksi.php';
?>
<nav class="bd-nav">
    <ul class="bd-hmenu">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="#">Profil Masjid</a>
            <ul>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="visi.php">Visi dan Misi</a></li>
                <li><a href="struktur.php">Struktur Organisasi</a></li>
            </ul>
        </li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="rab-mesjid.php">RAB</a>
            <!--<ul>
                <li><a href="tunai.php">Donasi Tunai</a></li>
                <li><a href="material.php">Donasi Material</a></li>
            </ul>-->
        </li>
       <!--<li><a href="cart.php">Keranjang</a></li>
        <li><a href="konfirmasi.php">Konfirmasi</a></li>-->
        <li><a href="kontak.php">Kontak Kami</a></li>
    </ul> 
</nav>