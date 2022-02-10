<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
echo "<script>alert('Selamat Tinggal!');
		window.location='../view/index.php'</script>";
?>