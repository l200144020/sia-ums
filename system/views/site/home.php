<?php
use yii\helpers\Url;
$this->title = 'SIA UMS';
?>
<div class="header">
	<h1>Selamat Datang</h1>
	<hr>
</div>
<div class="alert alert-info" role="alert">
Anda sekarang berada di halaman muka aplikasi Sistem Informasi Akademik Universitas Muhammadiyah Surakarta (UMS). Aplikasi ini merupakan bagian dari sistem informasi terpadu UMS, digunakan secara tidak terpisahkan dengan ADUMS, aplikasi pencatatan jurnal kuliah, dan beberapa terkait sistem keuangan. Secara umum aplikasi ini dirancang untuk memfasilitasi aktivitas penyusunan atau pengaksesan sistem administrasi dan informasi akademik, mencakup: penyusunan dan akses jadwal perkuliahan, penyusunan dan akses SK Akademik Dosen, akses hasil pengambilan rencana studi (KRS), akses jadwal ujian, pencetakan Kartu Ujian mandiri, dan akses hasil studi (KHS, Transkrip). Segenap sivitas akademika UMS (dosen, mahasiswa, program studi/fakultas, dan unit terkait) dapat mengakses aplikasi ini dengan menu akses sesuai fungsi atau kapasitas masing-masing, menggunakan sistem log in tertentu melalui internet maupun jaringan di dalam kampus UMS.
</div>
<div class="menu" align="center" style="margin-top:10px;">
	<button type="button" class="btn btn-primary btn-lg"><a class="menu" href="<?php echo Url::toRoute('dosen/index'); ?>">Dosen</a></button>
	<button type="button" class="btn btn-success btn-lg"><a class="menu" href="<?php echo Url::toRoute('ruang/index'); ?>">Ruang</a></button>
	<button type="button" class="btn btn-info btn-lg"><a class="menu" href="<?php echo Url::toRoute('mahasiswa/index'); ?>">Mahasiswa</a></button>
	<button type="button" class="btn btn-warning btn-lg"><a class="menu" href="<?php echo Url::toRoute('matakuliah/index'); ?>">Matakuliah</a></button>
	<button type="button" class="btn btn-danger btn-lg"><a class="menu" href="<?php echo Url::toRoute('logout/index'); ?>">Logout</a></button>
</div>