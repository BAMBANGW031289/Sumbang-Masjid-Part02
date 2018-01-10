<div class="bd-block clearfix">
 <?php
if($_SESSION['login_lvl']=='admin' )
	{
 ?>

  <div class="bd-blockheader">
            <h3 class="t">Informasi</h3>
        </div>
        <div class="bd-blockcontent"><p><span style="font-weight: bold;"><?php echo $_SESSION['login']['nama']; ?></span></p>
            <br>
            <p>Login Terkahir:<br><?php echo $_SESSION['login']['last']; ?></p>
            <br>
            <!--<p align="center"><a href="dashboard.php" class="bd-button">Dashboard</a></p>-->
			
<table width="100%">
<tr>
<td><b>MENU</b></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=dashboard">Dashboard</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=rab">Input RAB</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=rab_l">RAB</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=donasi">Data Donasi</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=adminkonfirmasi">Konfimasi Transfer</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=tambah-admin">Tambah Admin</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=tambah-foto">Tambah Foto</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=progress">Progress Pembangunan</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=berita">Berita</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="haladmin.php?p=ubah-password">Ubah Password</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="logout.php">Logout</a></td>
<td></td>
</tr>
</table>
	</div>
 <?php
	}
 else if($_SESSION['login_lvl']=='user' )
	{
 ?>
 
  <div class="bd-blockheader">
            <h3 class="t">Informasi</h3>
        </div>
        <div class="bd-blockcontent"><p><span style="font-weight: bold;"><?php echo $_SESSION['login']['nama']; ?></span></p>
            <br>
            <p>Login Terkahir:<br><?php echo $_SESSION['login']['last']; ?></p>
            <br>
            <!--<p align="center"><a href="dashboard.php" class="bd-button">Dashboard</a></p>-->
			
<table width="100%">
<tr>
<td><b>MENU</b></td>
<td></td>
</tr>
<tr>
<td >- <a href="halmember.php?p=dashboard_m">Dashboard</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="halmember.php?p=donasi-member">Donasi / Sodaqoh</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="halmember.php?p=konfirmasi-donasi">Konfirmasi Donasi</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="halmember.php?p=progress_m">Progress Pembangunan</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="halmember.php?p=ubah-password">Ubah Password</a></td>
<td></td>
</tr>
<tr>
<td >- <a href="logout.php">Logout</a></td>
<td></td>
</tr>
</table>
	</div>
  <?php
	}
 else 
	{
 ?>
 
 <div class="bd-blockheader">
            <h3 class="t">Login Form</h3>
        </div>
        <div class="bd-blockcontent">

            <form action="proseslogin.php" method="POST">
                <fieldset class="input" style="border: 0 none;">
                    <p id="form-login-username">
                        <label for="modlgn_username">Username</label>
                        <br />
                        <input id="modlgn_username" type="text" name="username" class="inputbox" alt="username" style="width:100%" required />
                    </p>
                    <p id="form-login-password">
                        <label for="modlgn_passwd">Password</label>
                        <br />
                        <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" alt="password" style="width:100%" required />
                    </p>
                    <p>&nbsp;</p>
                    <input type="submit" value="Login" name="Submit" class="bd-button" /><br />   
<a href="lupapassword.php?p=1">Lupa Password</a> 					<a href="registrasi.php?p=1">Registrasi</a>
                </fieldset>
            </form>
        </div>
 <?php
	}
 
 ?>
 
 
 
</div>
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