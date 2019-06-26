<?php
// (server,taikhoan,mk,database)
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'truyenhinh');

// // Check connection
if (!$conn) {
	die("connect failed: ".mysqli_connect_error());
} else {
	// format unico vn
	mysqli_set_charset($conn, 'utf8');
}
?>