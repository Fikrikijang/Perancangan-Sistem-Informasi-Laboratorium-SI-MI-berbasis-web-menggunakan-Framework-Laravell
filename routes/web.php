<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'PagesHomeController@index');
Route::get('/jadwals', 'PagesHomeController@jadwal');
Route::get('/tahapan', 'PagesHomeController@tahapan');
Route::get('/prosedur', 'PagesHomeController@prosedur');
Route::get('/visi-misi', 'PagesHomeController@visimisi');
Route::get('/struktur', 'PagesHomeController@struktur');
Route::get('/asistens', 'PagesHomeController@asistens');
Route::get('/artikels', 'PagesHomeController@artikels');
Route::get('/buku_praktikum', 'PagesHomeController@buku');
Route::get('/download/{file}', 'PagesHomeController@download');


Route::resource('/pendaftaran', 'PendaftaranController');
Route::resource('/detail', 'PagesHomeController');


Route::get('/isi-post/{slug}', 'BlogController@isi_blog')->name('blog.isi');
Route::get('/list-post','BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}','BlogController@list_category')->name('blog.category');
Route::get('/cari','BlogController@cari')->name('blog.cari');


//Halaman Mahasiswa
Route::prefix('student')->group(function() {

Route::get('/login', 'AuthStudent\LoginController@showLoginForm')->name('student.login');
Route::post('/login', 'AuthStudent\LoginController@login')->name('student.login.submit');
Route::get('/logout', 'AuthStudent\LoginController@logout')->name('student.logout');
Route::get('/', 'StudentController@index')->name('student.home');
Route::get('/kelas', 'StudentController@kelas')->name('student.kelas');
Route::get('/playlist/{id}', 'StudentController@playlist')->name('student.playlist');
Route::get('/play_video/{id}', 'StudentController@play')->name('student.play_video');
Route::get('/profil/{id}', 'StudentController@profil')->name('student.profil.index');
Route::get('/profil/edit/{id}', 'StudentController@edit')->name('student.profil.edit');
Route::post('/profil/update/{id}', 'StudentController@update')->name('student.profil.update');
Route::get('/profil/password/{id}', 'StudentController@password')->name('student.profil.password');
Route::post('/profil/ubah/{id}', 'StudentController@ubah')->name('student.profil.ubah');

Route::get('/download/{file}', 'StudentController@download')->name('student.download');




});

// Halaman admin dan staff
Route::group(['middleware' => 'auth'], function(){

	Route::get('/ilabsimi/home', 'HomeController@index')->name('home');
	
	Route::resource('/ilabsimi/jadwal', 'JadwalController');
	Route::get('/ilabsimi/jadwal/{id}/destroy', 'JadwalController@destroy');
	
	Route::resource('/ilabsimi/category', 'CategoryController');
	Route::get('/ilabsimi/category/{id}/destroy', 'CategoryController@destroy');

	Route::resource('/ilabsimi/tag', 'TagController');
	Route::get('/ilabsimi/tag/{id}/destroy', 'TagController@destroy');

	Route::resource('/ilabsimi/asisten', 'AsistenController');
	Route::get('/ilabsimi/asisten/{id}/destroy', 'AsistenController@destroy');
	
	
	Route::get('/ilabsimi/mahasiswa/{id}/destroy', 'MahasiswaController@destroy');
	Route::get('/ilabsimi/mahasiswa/{id}/profile', 'MahasiswaController@profile');
	Route::get('/ilabsimi/mahasiswa/{id}/tambah', 'MahasiswaController@tambah');
	Route::post('/ilabsimi/mahasiswa/{id}/addnilai', 'MahasiswaController@addnilai');
	Route::get('/ilabsimi/mahasiswa/nilai', 'MahasiswaController@nilai');
	Route::resource('/ilabsimi/mahasiswa', 'MahasiswaController');
	
	Route::resource('/ilabsimi/kelas', 'KelasController');
	Route::get('/ilabsimi/kelas/{id}/destroy', 'KelasController@destroy');

	Route::resource('/ilabsimi/praktikum', 'PraktikumController');
	Route::get('/ilabsimi/praktikum/{id}/destroy', 'PraktikumController@destroy');
	
	Route::resource('/ilabsimi/kategoris', 'KategoriController');
	Route::get('/ilabsimi/kategoris/{id}/destroy', 'KategoriController@destroy');

	Route::resource('/ilabsimi/playlist', 'PlaylistController');
	Route::get('/ilabsimi/playlist/{id}/destroy', 'PlaylistController@destroy');
	

	Route::get('/ilabsimi/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
	Route::get('/ilabsimi/post/restore/{id}', 'PostController@restore')->name('post.restore');
	Route::delete('/ilabsimi/post/kill/{id}', 'PostController@kill')->name('post.kill');

	Route::resource('/ilabsimi/post', 'PostController');
	Route::get('/ilabsimi/post/{id}/destroy', 'PostController@destroy');
	
	Route::resource('/ilabsimi/strukturlab', 'StrukturlabController');
	Route::get('/ilabsimi/strukturlab/{id}/destroy', 'StrukturlabController@destroy');

	Route::resource('/ilabsimi/user', 'UserController');
	Route::get('/ilabsimi/user/{id}/destroy', 'UserController@destroy');

	Route::resource('/ilabsimi/buku', 'BukuController');
	Route::get('/ilabsimi/buku/{id}/destroy', 'BukuController@destroy');
	
	Route::resource('/ilabsimi/calas', 'DaftarcalasController');
	Route::get('/ilabsimi/calas/{id}/destroy', 'DaftarcalasController@destroy');

	Route::resource('/ilabsimi/profil', 'ProfilController');

	Route::post('/ilabsimi/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');
});









