<!-- Login -->
<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'includes/connect.php';

// menangkap data yang dikirim dari form
//function daftar(){
   // global $conn;
//if (isset($_POST['masuk'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // mengambil data user dari tabel user
    $user = $conn->query("SELECT noinduk, nama, email, password, telepon, alamat, foto, tingkatan, user.akses, created, updated
FROM apoteker a
INNER JOIN akses user ON a.akses=user.id
WHERE email='$email' AND password='$password' 
UNION
SELECT nip, karyawan, email, password, telepon, alamat, foto, jabatan, user.akses, created, updated
FROM karyawan k
INNER JOIN akses user ON k.akses=user.id
WHERE email='$email' AND password='$password'
UNION 
SELECT nrs, supplier, email, password, telepon, alamat, foto, tipe, user.akses, created, updated
FROM supplier s
INNER JOIN akses user ON s.akses=user.id
WHERE email='$email' AND password='$password'
UNION 
SELECT  nipl, pelanggan, email, password, telepon, alamat, foto, tingkatan, user.akses, created, updated
FROM pelanggan p
INNER JOIN akses user ON p.akses=user.id 
WHERE email='$email' AND password='$password';");
    //meghitung jumlah data
    $cek = mysqli_num_rows($user);
    //jika nama dan password lebih dari 0 maka user ditemukan
    if ($cek > 0) {
        //mengambil data
        $data =$user->fetch_assoc();
        //jika user adalah apoteker
        if ($data['akses'] == 'apoteker') {
            //buat session nama dan aksesnya
            $_SESSION['noinduk'] = $data['noinduk'];
            $_SESSION['apoteker'] = $data['nama'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['telepon'] = $data['telepon'];
            $_SESSION['alamat'] = $data['alamat'];
            $_SESSION['foto'] = $data['foto'];
            $_SESSION['tingkatan'] = $data['tingkatan'];
            $_SESSION['akses'] 	  = 'apoteker';
            $_SESSION['created'] = $data['created'];
            $_SESSION['updated'] = $data['updated'];
            //arahkan user apoteker ke halaman apoteker
            header("location:pages/apoteker/beranda.php");
        //jika user adalah apoteker
        } elseif ($data['akses'] == 'karyawan') {
            $_SESSION['nip'] = $data['noinduk'];
            $_SESSION['karyawan'] = $data['nama'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['telepon'] = $data['telepon'];
            $_SESSION['alamat'] = $data['alamat'];
            $_SESSION['foto'] = $data['foto'];
            $_SESSION['jabatan'] = $data['tingkatan'];
            $_SESSION['akses'] 	  = 'karyawan';
            $_SESSION['created'] = $data['created'];
            $_SESSION['updated'] = $data['updated'];
            header("location:pages/karyawan/beranda.php");
        } elseif ($data['akses'] == 'supplier') {
            $_SESSION['nrs'] = $data['noinduk'];
            $_SESSION['supplier'] = $data['nama'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['telepon'] = $data['telepon'];
            $_SESSION['alamat'] = $data['alamat'];
            $_SESSION['foto'] = $data['foto'];
            $_SESSION['tipe'] = $data['tingkatan'];
            $_SESSION['akses'] 	  = 'supplier';
            $_SESSION['created'] = $data['created'];
            $_SESSION['updated'] = $data['updated'];
            header("location:pages/supplier/beranda.php");
        } elseif ($data['akses'] == 'pelanggan') {
            $_SESSION['nipl'] = $data['noinduk'];
            $_SESSION['pelanggan'] = $data['nama'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['telepon'] = $data['telepon'];
            $_SESSION['alamat'] = $data['alamat'];
            $_SESSION['foto'] = $data['foto'];
            $_SESSION['tingkatan'] = $data['tingkatan'];
            $_SESSION['akses'] 	  = 'pelanggan';
            $_SESSION['created'] = $data['created'];
            $_SESSION['updated'] = $data['updated'];
            header("location:main.php");
        } else {
            //jika tidak ada user
            header("location:register.php?alert=1");
        }
    }
//}
//Register 
if(isset($_POST['daftar'])){
    $nama = htmlspecialchars($_POST['nama']);
    $email = ($_POST['email']);
    $telepon = ($_POST['telepon']);
    $password = md5($_POST['password']);
    $foto = ($_POST['foto']);  
    $akses = ($_POST['akses']);
    $calendar = ($_POST['calendar']);
    $alamat = ($_POST['alamat']);

    	// check username already exist
	if($akses === "apoteker"){
		$query = "SELECT * FROM apoteker WHERE email = '$email'";
	}
	elseif($akses === "karyawan"){
		$query = "SELECT * FROM karyawan WHERE email = '$email'";
	}
	elseif($akses === 'supplier'){
		$query = "SELECT * FROM supplier WHERE email = '$email'";
	}

	$sql = mysqli_query($conn, $query);

    $qu_register = "INSERT INTO " . "$akses" . " (nama, email, password, telepon, alamat, foto, akses) VALUES('$nama', '$email', '$password', '$telepon', '$alamat', '$foto', '$akses')";
    $sql_register = mysqli_query($conn, $qu_register)or die("Error: " . mysqli_error($conn));


$result = $conn->query("INSERT INTO user (foto, nama, email, password, telepon, alamat, akses) values('$foto','$nama','$email', '$password', '$telepon','$alamat','$akses')
/*SELECT * FROM apoteker
WHERE akses='apoteker';
SELECT 'karyawan', foto, nama, email, telepon, alamat, jabatan, akses
FROM karyawan
WHERE akses='karyawan';
SELECT 'supplier', foto, nama, email, telepon, alamat, tipe, akses
FROM supplier 
WHERE akses='supplier'
SELECT 'pelanggan', foto, nama, email, telepon, alamat, tingkatan, akses 
FROM pelanggan
WHERE akses='pelanggan';*/
");
    echo " 
    <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script>";
    exit();
}

?>