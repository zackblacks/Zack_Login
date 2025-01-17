<?php 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman ke halaman login, dengan memberi parameter pesan yang berisi string "logout"
header("location:index.html");
?>