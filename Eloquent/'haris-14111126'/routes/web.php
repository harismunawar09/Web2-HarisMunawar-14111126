<?php
use App\Mahasiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web rout
|
*/
Route::get('/', 'ViewController@index');
Route::get('/awal', 'ViewController@awal');
Route::get('/edit', 'ViewController@ubah'); 

Route::get('/tambah', function(){
	$Mahasiswa = new Mahasiswa;
	$Mahasiswa -> nama = "Haris";
	$Mahasiswa -> nim = "14 111 126";
	$Mahasiswa -> alamat = "Cianjur";
	$Mahasiswa -> save();
});

Route::get('/ubah', function(){
	$Mahasiswa = Mahasiswa::find(1);
	$Mahasiswa -> nama = "Haris Munawar";
	$Mahasiswa -> nim = "14 111 127";
	$Mahasiswa -> alamat = "Bandung";
	$Mahasiswa -> save();
});

Route::get('/tampil', function()
{
	$mahasiswa = Mahasiswa::all();
	foreach($mahasiswa as $mhs)
	{
		echo "<br><b>Nama</b></br> : ";
		echo $mhs->nama;
		echo "<br> <b>NIM</b> : ";
		echo $mhs ->nim;
		echo "<br><b>Alamat</b> : ";
	echo $mhs->alamat;
	}
});

Route::get('/hapus', function(){
	$Mahasiswa = Mahasiswa::find(2);
	$Mahasiswa -> delete();
});
//Route::get('/tambah', 'ViewController@tambah'); 
  
