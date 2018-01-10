<?php include 'koneksi.php'; ?>
<?php session_start(); ?>
<?php //session_destroy();  ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Keranjang</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

        <?php include('assets.php'); ?>

    </head>
    <body>
        <div id="bd-main">
            <div class="bd-sheet clearfix">
                <header class="bd-header">

                    <div class="bd-shapes">

                    </div>

                </header>
                <?php include('nav.php'); ?>
                <div class="bd-layout-wrapper">
                    <div class="bd-content-layout">
                        <div class="bd-content-layout-row">
                            <div class="bd-layout-cell bd-sidebar1">
                                <?php include('sidebar.php'); ?>
                            </div>
                            <div class="bd-layout-cell bd-content"><article class="bd-post bd-article">
                                    <h2 class="bd-postheader">Keranjang</h2>

                                    <div class="bd-postcontent bd-postcontent-0 clearfix">
                                        <?php $line_cost = 0; ?>
                                        <?php $sum_cost = 0; ?>
                                        <?php if (isset($_SESSION['cart'])): ?>
                                        <?php $cart = $_SESSION['cart']; ?>
                                            <center>
                                                <table style="width: 75%">
                                                    <tr>
                                                        <th>Nama Material</th>
                                                        <th>Harga Satuan</th>
                                                        <th>Jumlah Beli</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                    <?php foreach ($cart as $key => $value): ?>
                                                        <?php $queryM = "SELECT nama_material,harga FROM material WHERE idmaterial='$key'"; ?>
                                                        <?php $resultM = mysql_query($queryM); ?>
                                                        <?php $rm = mysql_fetch_array($resultM); ?>
                                                        <?php $jum = $value; ?>
                                                        <?php
                                                        $nama = $rm['nama_material'];
                                                        $harga = $rm['harga'];
                                                        $dcost = $jum * $harga;
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $nama; ?></td>
                                                            <td style="text-align: center;"><?php echo $harga; ?></td>
                                                            <td style="text-align: center;"><?php echo $jum; ?></td>
                                                            <td style="text-align: center;">Rp. <?php echo number_format($dcost); ?>,-</td>
                                                        </tr>
                                                        <?php $sum_cost += $dcost; ?>
                                                    <?php endforeach; ?>
                                                        <tr>
                                                            <td colspan="2">&nbsp;</td>
                                                            <td style="text-align: right;"><b>Total</b></td>
                                                            <td style="text-align: center;">Rp. <?php echo number_format($sum_cost); ?>,-</td>
                                                        </tr>
                                                </table>
                                                <br>
                                                <a href="belimaterial.php?act=delete" onclick="return confirm('Anda yakin ingin mengosongkan keranjang?')" class="bd-button">Hapus</a>
                                                <a href="checkout" class="bd-button">Checkout</a>
                                            </center>
                                        <?php else: ?>
                                            <center><h2>Keranjang belanja masih kosong</h2></center>
                                        <?php endif; ?>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>
    </body>
</html>