<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Donasi Material</title>
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
                                    <h2 class="bd-postheader">Donasi Material</h2>

                                    <div class="bd-postcontent bd-postcontent-0 clearfix">
                                        <?php $query = "SELECT * FROM material"; ?>
                                        <?php $result = mysql_query($query); ?>
                                        <?php if (mysql_num_rows($result) > 0): ?>
                                            <table class="bd-article" style="width: 100%; ">
                                                <tbody>
                                                    <tr>
                                                        <?php $i = 0; ?>
                                                        <?php $limit = 4; ?>
                                                        <?php while ($r = mysql_fetch_array($result)): ?>
                                                        <td style="text-align: center; width: 20%; "><img alt="" style="width: 150px;" class="bd-lightbox" src="material/<?php echo $r['gambar']; ?>"><br><b><?php echo $r['nama_material']; ?></b><br>Rp.<?php echo number_format($r['harga']); ?>,-<br><a href="belimaterial.php?act=add&id=<?php echo $r['idmaterial']; ?>" class="bd-button">Sumbang</a></td>
                                                        <?php $i++; ?>
                                                        <?php if($i % $limit == 0): ?>
                                                        </tr>
                                                        <tr>
                                                        <?php $i = 1; ?>
                                                        <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    </tr>
                                                    </tbody>
                                            </table>
                                        <?php else: ?>
                                            <center><h2>Belum ada data materal</h2></center>
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