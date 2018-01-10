<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Galeri</title>
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
                            <div class="bd-layout-cell bd-content">
                                    <h2 class="bd-postheader">Galeri</h2>
<br /><br />
                                    <table width="100%" align="center">
		<tr>
		<?php
		$f= mysql_query("select * from galeri_foto where status='aktif' ");
		$i = 1;
		while($row = mysql_fetch_array($f)){
		?>
			<td><?php echo $row['deskripsi'];?><br/>
				<div class="bd-layout-cell" style="width: 20%" >
                                                    <p>
				<img src="images/galeri/<?php echo $row['nama_file'];?>" alt="" class="bd-lightbox" width="200" border="0"/>
				</p>
                                                </div>
				
			</td>
		<?php
			if($i % 3 == 0){
				echo '</tr><tr>';
			}
			$i++;
		}
		?>
		</tr>
	</table>


                                </div>
                        </div>
                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>


    </body></html>