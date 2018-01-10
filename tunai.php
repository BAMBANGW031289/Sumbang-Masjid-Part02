<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>New Page</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
        <?php include('assets.php'); ?>
        
        <style>
            table, tr, td{
                border: hidden;
            }
        </style>
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
                                <article class="bd-post bd-article">
                                    <h2 class="bd-postheader">Donasi Tunai</h2>

                                    <div class="bd-postcontent bd-postcontent-0 clearfix">
                                        <center>
                                            <p><strong>Anda dapat mengirimkan donasi melalui bank-bank berikut</strong></p>
										<fieldset>
                                        <table>
										<tr>
											<td style="text-align: center; border: hidden;"><a href="konfirmasi.php"><img src="images/bni.png"></a></td>
											<p>
										</tr>	
										<tr>
                                            <td style="text-align: center; border: hidden;"><a href="konfirmasi.php"><img src="images/BCA-bank-logo-transparent.png"></a></td>
                                            <p>
										</tr>
	                                    <tr>
                                        <td style="text-align: center; border: hidden;"><a href="konfirmasi.php"><img src="images/Logo+Bank+BRI-1.gif"></a></td>
                                        <p>
										</tr>
										<tr>
										<td style="text-align: center; border: hidden;"><a href="konfirmasi.php"><img src="images/3160827_20140811113649.jpg"></a></td>
										</tr>
                                        </table>
										</fieldset>
                                        </center>
                                    </div>
                                    <div class="bd-postcontent bd-postcontent-0 clearfix">
                                        <center>
                                            <p><strong>Anda juga dapat mengirimkan sumbangan melalui Paypal</strong></p>
                                        <a href="https://www.paypal.com/signin?returnUri=http%3A%2F%2Furi.paypal.com%2FWeb%2FWeb%2Fcgi-bin%2Fwebscr%3Fvia%3Dul&state=%3fcmd%3d_account"><img src="images/paypal_logo.jpg" /></a>
                                        </center>
                                    </div>
                                </article></div>
                        </div>
                    </div>
                </div>
                <?php include('footer.php'); ?>

            </div>
        </div>


    </body></html>