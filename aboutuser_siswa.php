<html>
<?php
ob_start();
include "koneksi.php";
?>
<link rel="stylesheet" href="css/aboutuser.css">

<head>
	<style type="text/css">
		div#content {
			float: center;
			padding: 0px 0 15px 0;
			margin: 70px 50px 0 50px;
			background-color: #FFF;
		}
	</style>
</head>

<body>
	<?php
	$username = $_SESSION['username_siswa'];
	$result = mysqli_query($koneksi, "SELECT * FROM login_siswa");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?>
	<center>
		<div id="content">
			<form action="login_siswa.php" method="POST">
				<table cellpadding="0" cellspacing="5" bgcolor="#2F4F4F">
					<tr height="36" bgcolor="#F8F8FF">
						<th colspan="5">Your Login Detail</th>
					</tr>
					<tr>
						<td>
							<table>
								<tr><br />
								<tr>
									<td width="90" style="color:white">Username</td>
									<td width="300" style="color:white">: <?= $row['username_siswa'] ?></td>
								</tr>
								<tr>
									<td style="color:white">Nama</td>
									<td style="color:white">: <?= $row['nm_siswa'] ?></td>
								</tr>
								<tr>
									<td style="color:white">NISN</td>
									<td style="color:white">: <?= $row['nisn_siswa'] ?></td>
								</tr>
								<tr>
									<td style="color:white">Gender</td>
									<td style="color:white">: <?= $row['jk_siswa'] ?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</body>

</html>