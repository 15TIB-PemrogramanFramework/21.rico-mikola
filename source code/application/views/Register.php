<html>
<head>
<title>Pendaftaran</title>
</head>
<?php $this->load->view('templates/head'); ?>
<body>
<form method="post" action="<?php echo base_url()."index.php/member/register"; ?>" class="inner-login">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>PENDAFTARAN</font></center></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
</tr>
<tr>
<td>alamat</td><td>:</td><td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>no.hp</td><td>:</td><td><input type="text" name="nomor"></td>
</tr>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input type="submit" name="submit" value="DAFTAR"></td>
</tr>
<tr>
</tr>
</table>
</form>
<?php $this->load->view('templates/tail'); ?>
</body>
</html>