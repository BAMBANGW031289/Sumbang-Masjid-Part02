<div class="bd-block clearfix">
    <div class="bd-blockheader"><br /><br />
        <h3 class="t">Update</h3>
    </div>
    <div class="bd-blockcontent"><p><span style="font-weight: bold;">Berita Terbaru</span></p>
        <br>
        <?php $query = "SELECT * FROM berita"; ?>
        <?php $result = mysql_query($query); ?>
        <?php if (mysql_num_rows($result) > 0): ?>
            <p>
            <marquee direction="up" scrollamount="2">    
                <?php while ($r = mysql_fetch_array($result)): ?>
                    <b><?php echo $r['judul']; ?></b><br><?php echo $r['teks']; ?><br><?php echo date('d-m-Y H:i:s', strtotime($r['tanggal'])); ?>
                    <hr>
                <?php endwhile; ?>
            </marquee>
            </p>
        <?php else: ?>
            <p><marquee direction="up">Belum ada berita</marquee></p>
        <?php endif; ?>
    </div>
</div>