<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\DashAdminController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\StrukturDesaController;
use App\Http\Controllers\StrukturKarangController;
use App\Http\Controllers\StrukturPKKController;
use App\Http\Controllers\SaranaUmumController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UMKMDesaController;
use App\Http\Controllers\BeritaDesaController;
use App\Http\Controllers\TentangDesaController;
use App\Http\Controllers\DashDesaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashWebController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GaleriDesaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/ads', function () {
    return view('welcome');
});
//desa

Route::get('/dashweb',[DashWebController::class,'dashweb'])->name('dashweb');
Route::get('/desa/{id}/user/{id_user}/berita', [BeritaController::class, 'show'])->name('berita.index');

Route::get('/',[DashWebController::class,'dashboardwebsite'])->name('dashboardwebsite');




Route::get('/umkmdesa',[UMKMDesaController::class,'umkmdesa'])->name('umkmdesa');
Route::get('/beritadesa',[BeritaDesaController::class,'beritadesa'])->name('beritadesa');
Route::get('/tentangdesa',[TentangDesaController::class,'tentangdesa'])->name('tentangdesa');
Route::get('/pariwisatadesa',[PariwisataDesaController::class,'pariwisatadesa'])->name('pariwisatadesa');
Route::get('/penghargaandesa',[PenghargaanDesaController::class,'penghargaandesa'])->name('penghargaandesa');
Route::get('/pemerintahdesa',[LembagaDesaController::class,'pemerintahdesa'])->name('pemerintahdesa');
Route::get('/karangtaruna',[KarangTarunaDesaController::class,'karangtaruna'])->name('karangtaruna');
Route::get('/pkk',[PKKDesaController::class,'pkk'])->name('pkk');
Route::get('/grafikusia',[GrafikUsiaDesaController::class,'grafikusia'])->name('grafikusia');
Route::get('/grafikkelamin',[GrafikKelaminDesaController::class,'grafikkelamin'])->name('grafikkelamin');
Route::get('/grafikagama',[GrafikAgamaDesaController::class,'grafikagama'])->name('grafikagama');
Route::get('/grafikpendidikan',[GrafikPendidikanDesaController::class,'grafikpendidikan'])->name('grafikpendidikan');
Route::get('/grafikperkawinan',[GrafikKawinDesaController::class,'grafikperkawinan'])->name('grafikperkawinan');
Route::get('/saranaumum',[SaranaDesaController::class,'saranaumum'])->name('saranaumum');
Route::get('/peraturandesa',[PeraturanDesaController::class,'peraturandesa'])->name('peraturandesa');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/galeridesa',[GaleriDesaController::class,'galeridesa'])->name('galeridesa');
Route::get('/galeridesa2',[GaleriDesaController::class,'galeridesa2'])->name('galeridesa2');

// Route::get('/dashboard', function () {
//     return view('webadmin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//login
Route::get('/masuk',[LoginController::class,'login'])->name('masuk');
Route::post('/mauk',[LoginController::class,'store'])->name('mauk');
Route::post('/destroy',[LoginController::class,'destroy'])->name('destroy');
Route::get('/daftar',[RegisterController::class,'create'])->name('daftar');
Route::post('/create',[RegisterController::class,'simpan'])->name('create');



Route::get('/umkmdesa',[UMKMDesaController::class,'umkmdesa'])->name('umkmdesa');
Route::get('/beritadesa',[BeritaDesaController::class,'beritadesa'])->name('beritadesa');
Route::get('/tentangdesa',[TentangDesaController::class,'tentangdesa'])->name('tentangdesa');
Route::get('/dashdesa',[DashDesaController::class,'dashdesaui'])->name('dashdesa');


Route::middleware(['auth:sanctum','verified','adminweb'])->group(function(){

    Route::get('/dataadmin', [DataAdminController::class, 'DataAdmin']);
    Route::get('/dataadmin/search1', [DataAdminController::class, 'search1'])->name('search1');
    Route::get('/dataadmin/search2', [DataAdminController::class, 'search2'])->name('search2');
    Route::get('/dashwebadmin', [DashAdminController::class, 'dashadmin']);
    Route::post('/update-status/{id}', [DataAdminController::class, 'updateStatus'])->name('update.status');
    Route::get('/deleteadmin/{id}', [DataAdminController::class, 'deleteadmin'])->name('deleteadmin');
    Route::get('/user/{id}', [DataAdminController::class, 'show'])->name('user.show');
    Route::get('/cek', [DataAdminController::class, 'lihat']);
    
    
 });
 

 Route::middleware(['auth:sanctum','verified','admindesa'])->group(function(){
    Route::get('/dashboardadmindesa',[DashboardController::class, 'dashboard'])->name('dashboard');



Route::get('/berita',[BeritaController::class,'berita'])->name('berita');
Route::get('/tambah_berita',[BeritaController::class,'tambahberita'])->name('tambah_berita');
Route::post('/uploadberita',[BeritaController::class,'uploadberita'])->name('uploadberita');
Route::get('/edit/{id}',[BeritaController::class,'edit'])->name('edit');
Route::post('/editberita/{id}',[BeritaController::class,'editberita'])->name('editberita');
Route::get('/deleteberita/{id}',[BeritaController::class,'deleteberita'])->name('deleteberita');

//galeri
Route::get('/galeri',[GaleriController::class, 'galeri'])->name('galeri');
Route::get('/tampil/{id}',[GaleriController::class, 'tampil'])->name('tampil');
Route::get('/tambah_galeri',[GaleriController::class, 'tambahgaleri'])->name('tambah_galeri');
Route::post('/upload', [GaleriController::class, 'upload'])->name('upload');
Route::post('/tampilgaleri/{id}',[GaleriController::class, 'tampilgaleri'])->name('tampilgaleri');
Route::get('/deletegaleri/{id}',[GaleriController::class, 'deletegaleri'])->name('deletegaleri');

//data penduduk
Route::get('/export',[DataPendudukController::class,'export'])->name('export');
Route::post('/import',[DataPendudukController::class,'import'])->name('import');

Route::get('/data_penduduk',[DataPendudukController::class,'datapenduduk'])->name('data_penduduk');
Route::get('/data_penduduk/searchh', [DataPendudukController::class, 'searchh'])->name('searchh');
Route::get('/tambahpenduduk',[DataPendudukController::class,'tambahpenduduk'])->name('tambahpenduduk');
Route::post('/insertpenduduk',[DataPendudukController::class, 'insertpenduduk'])->name('insertpenduduk');
Route::get('/tampilpenduduk/{id}',[DataPendudukController::class, 'tampilpenduduk'])->name('tampilpenduduk');
Route::post('/updatependuduk/{id}',[DataPendudukController::class, 'updatependuduk'])->name('updatependuduk');
Route::get('/deletependuduk/{id}',[DataPendudukController::class, 'deletependuduk'])->name('deletependuduk');

// pariwisatas
Route::get('/pariwisata',[PariwisataController::class,'pariwisata'])->name('pariwisata');
Route::get('/tambah_pariwisata',[PariwisataController::class,'tambahpariwisata'])->name('tambah_pariwisata');
Route::post('/uploadpariwisata',[PariwisataController::class,'uploadpariwisata'])->name('uploadpariwisata');
Route::get('/editpar/{id}',[PariwisataController::class,'editpar'])->name('editpar');
Route::post('/editpariwisata/{id}',[PariwisataController::class,'editpariwisata'])->name('editpariwisata');
Route::get('/deletepariwisata/{id}',[PariwisataController::class,'deletepariwisata'])->name('deletepariwisata');

// sarana
Route::get('/sarana_umum',[SaranaUmumController::class,'sarana'])->name('sarana_umum');
Route::post('/updatesarana/{id}',[SaranaUmumController::class, 'updatesarana'])->name('updatesarana');


// penghargaan
Route::get('/penghargaan',[PenghargaanController::class,'penghargaan'])->name('penghargaan');
Route::get('/tambah_penghargaan',[PenghargaanController::class,'tambahpenghargaan'])->name('tambah_penghargaan');
Route::post('/uploadpenghargaan',[PenghargaanController::class,'uploadpenghargaan'])->name('uploadpenghargaan');
Route::get('/editpeng/{id}',[PenghargaanController::class,'editpeng'])->name('editpeng');
Route::post('/editpenghargaan/{id}',[PenghargaanController::class,'editpenghargaan'])->name('editpenghargaan');
Route::get('/deletepenghargaan/{id}',[PenghargaanController::class,'deletepenghargaan'])->name('deletepenghargaan');


//struktur desa
Route::post('/updatestrukturdesa',[StrukturDesaController::class, 'updatestrukturdesa'])->name('updatestrukturdesa');
Route::get('/struktur_desa',[StrukturDesaController::class,'strukturdesa'])->name('struktur_desa');

//struktur kt
Route::get('/struktur_karang',[StrukturKarangController::class,'strukturkarang'])->name('struktur_karang');
Route::get('/struktur_karang/cari', [StrukturKarangController::class, 'cari'])->name('cari');
Route::get('/tambahanggota',[StrukturKarangController::class,'tambahanggota'])->name('tambahanggota');
Route::post('/insertanggota',[StrukturKarangController::class, 'insertanggota'])->name('insertanggota');
Route::get('/tampilkt/{id}',[StrukturKarangController::class, 'tampilkt'])->name('tampilkt');
Route::post('/updatekt/{id}',[StrukturKarangController::class, 'updatekt'])->name('updatekt');
Route::get('/deletekt/{id}',[StrukturKarangController::class, 'deletekt'])->name('deletekt');


//struktur pkk

Route::get('/struktur_pkk',[StrukturPKKController::class,'strukturpkk'])->name('struktur_pkk');
Route::get('/struktur_pkk/search', [StrukturPKKController::class, 'search'])->name('search');
Route::get('/tambahpkk',[StrukturPKKController::class,'tambahpkk'])->name('tambahpkk');
Route::post('/insertpkk',[StrukturPKKController::class, 'insertpkk'])->name('insertpkk');
Route::get('/tampilpkk/{id}',[StrukturPKKController::class, 'tampilpkk'])->name('tampilpkk');
Route::post('/updatepkk/{id}',[StrukturPKKController::class, 'updatepkk'])->name('updatepkk');
Route::get('/deletepkk/{id}',[StrukturPKKController::class, 'deletepkk'])->name('deletepkk');

//data peraturan
Route::get('/peraturan',[PeraturanController::class,'peraturan'])->name('peraturan');
Route::get('/tambahperaturan',[PeraturanController::class,'tambahperaturan'])->name('tambahperaturan');
Route::post('/insertperaturan',[PeraturanController::class, 'insertperaturan'])->name('insertperaturan');
Route::get('/tampilperaturan/{id}',[PeraturanController::class, 'tampilperaturan'])->name('tampilperaturan');
Route::post('/updateperaturan/{id}',[PeraturanController::class, 'updateperaturan'])->name('updateperaturan');
Route::get('/deleteperaturan/{id}',[PeraturanController::class, 'deleteperaturan'])->name('deleteperaturan');



//profil desa
Route::get('/profil_desa',[ProfilDesaController::class,'profildesa'])->name('profil_desa');
Route::post('/updateprofildesa/{id}',[ProfilDesaController::class, 'updateprofildesa'])->name('updateprofildesa');


Route::resource('products', ProductController::class);

});
