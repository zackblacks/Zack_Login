<?php 
// menangkap data username dan password yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
// memeriksa apakah username yang diisi adalah "admin", dan password yang diisi adalah "admin123"
if($username == "admin" && $password == "admin123"){
	// aktifkan session
	session_start();
	// buat session username dan session status. session username berisi username, dan session status berisi string "login"
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
 
	// setelah session dibuat, alihkan halaman ke halaman dashboard admin
	header("location: 98745623casa36546sdcascca566453639869414625245567865753875815674676479849afccafcsafedfgragargewdfa6565421654gd65szgvaz65g4v6a5r4fg6v4arfgvagrf64168r474qta1y3d64jsag646r4tga98r4g65146areg51517748932fsdfccdzvdfs4896326sdfvs496856156.html");
}else{
	// jika login gagal, alihkan halaman kembali ke halaman login dengan membuat parameter pesan yang berisi "gagal"
	header("location: 59565dcsazd6cfard5146gfv5454659414625245567865753875815674676479849afccafcsafedfgragargewdfa6565421654gd65szgvaz65g4v6a5r4fg6v4arfgvagrf64168r474qta1y3d64jsag646r4tga98r4g65146areg51517748932fsdfccdzvdfs4896326sdfvs496856156.html");	
}
?>