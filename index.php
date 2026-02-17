<?php
// ================= DATA DIRI =================
$nama_lengkap   = Tiara Rahmadani";
$nama_panggilan = "Tiara";
$agama          = "Islam";
$tempat_lahir   = "Semarang";
$tanggal_lahir  ="19";
$bulan_lahir    ="Mei";
$tahun_lahir    = 2009;
$alamat         = "Jl . Lempongsari 2 rt 05 rw 01";
$gender         = "Perempuan";
$kewarganegaraan= "Indonesia";
$no_wa          = "085701854028;
$email          = "rahma.tiara.19@gmail.com";

// ================= PERHITUNGAN =================
$tahun_sekarang = date("Y");
$umur_sekarang  = $tahun_sekarang - $tahun_lahir;

// ================= KEINGINAN 10 TAHUN =================
$tahun_10_lagi  = $tahun_sekarang + 10;
$umur_10_lagi   = $umur_sekarang + 10;
$cita_cita      = "Pengusaha kaya raya";
$rencana        = "Mencapai pendidikan tinggi dan mempunyai usaha sendri";

// ================= MOTTO =================
$motto = "<span style='background-color:orange;'"<Don’t wish your life away>";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata <?= $nama_panggilan ?></title>
    <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div id="clock">00:00:00</div>
    <div id="date">Kamis, 12 Februari 2026</div>
</div>

        </div>
        <h1><?= $nama_lengkap ?></h1>
        <p class="tagline"> Pelajar | XPPLG3 </p>
    </div>
  <hr>

    <div class="main-content">
        <div class="col">
            <h2><i class="fa-solid fa-user"></i> Data Diri</h2>

<img src="aku slf.jpeg" width="100">

<p><b>Nama Lengkap:</b><td>  Tiara Rahmadani; </td></p>
<p><b>Nama Panggilan:</b><td> Tiara</td></p>
<p><b>Agama:</b> <td> Islam </td></p>
<p><b>Tempat Lahir:</b>  <td> Semarang </td></p>
<p><b>Tanggal Lahir:</b> <td> 19 </td></p>
<p><b>Bulan Lahir:</b> Mei </p>
<p><b>Tahun Lahir:</b> 2009 </p>
<p><b>Umur:</b>  16 tahun</p>
<p><b>Alamat:</b>  Jl.Lempongsari 2 rt 05 rw 01; </p>
<p><b>Gender:</b>  Perempuan </p>
<p><b>Kewarganegaraan:</b>Indonesia </p>
<p><b>No WA:</b> 085701854028 </p>
<p><b>Email:</b> rahma.tiara.19@gmail.com </p>

<hr>

<h2><i class="fa-solid fa-star"></i> Skills</h2>

<p>HTML - 70%</p>

<p>CSS - 55%</p>

<p>PHP - 55%</p>

<p>MySQL - 55%</p>

<p>Problem Solving - 60%</p>

 <div class="col">
            <h2><i class="fa-solid fa-heart"></i> Hobi & Favorit</h2>

<h2>Hobi </h2>
<ol>
  <li>Running</li>
  <li>Cooking</li>
  <li>traveling</li>
</ol>

<h2>Makanan Favorit</h2>
<ul style="list-style-type:square;">
  <li>Dimsum</li>
  <li>Nasi goreng</li>
  <li>Sea food</li>
</ul>

<h2>Minuman Favorit</h2>
<ol type="A">
  <li>Kopi</li>
  <li>Teh</li>
  <li>Susu</li>
</ol>
  <h2><i class="fa-solid fa-rocket"></i> Life</h2>
<h3>Riwayat Pendidikan</h3>
<table border="1" cellpadding="8">
<tr>
    <th>Tingkat</th>
    <th>Nama Sekolah</th>
    <th>Tahun Mulai</th>
    <th>Tahun Lulus</th>
</tr>
<tr>
    <td>SD</td>
    <td>SD Nergri Lempongsari</td>
    <td>2016</td>
    <td>2022</td>
</tr>
<tr>
    <td>SMP</td>
    <td>SMP Negeri 10 Semarang</td>
    <td>2022</td>
    <td>2025</td>
</tr>
<tr>
    <td>SMK</td>
    <td>SMK Negeri 8 Semarang</td>
    <td>2025</td>
    <td>2028</td>
</tr>
</table>
<hr>

<h2>Motto Hidup</h2>
<marquee direction="left"><?= $motto ?></marquee>

<hr>

<h2>Keinginan 10 Tahun Mendatang</h2>
<p>
  Hai namaku Tiara Rahmadani, biasa dipanggil Tiara. Umur saya
<b><?= $umur_sekarang ?></b> tahun.<br><br>

10 tahun lagi di tahun <b><?= $tahun_10_lagi ?></b>,
pada umur <b><?= $umur_10_lagi ?></b> tahun,
saya ingin menjadi <b><?= $cita_cita ?></b>.<br>

Rencana yang akan saya tempuh adalah
<b><?= $rencana ?></b>.
</p>

<hr>

<a href="jadwal.php">➡️ Lihat Jadwal Pelajaran</a>

</body>
</html>
