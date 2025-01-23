<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start');
});

Route::get('/dashboard', [
    CourseController::class, 'tampilKursusDashboard'
])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kursus',[
    CourseController::class, 'tampilKursus'
])->middleware(['auth', 'verified'])->name('kursus');

Route::get('/pendaftaran', [
    StudentController::class, 'tampilStudent'
])->middleware(['auth', 'verified'])->name('pendaftaran');

Route::get('/tambah-kursus', function () {
    return view('tambah-kursus');
})->middleware(['auth', 'verified'])->name('tambah-kursus');

Route::post('/tambah-kursus/simpan', [
    CourseController::class, 'tambahKursus'
])->middleware(['auth', 'verified'])->name('tambah-kursus.simpan');

Route::get('/tambah-siswa', [
    CourseController::class, 'tampilIDKursus'
])->middleware(['auth', 'verified'])->name('tambah-siswa');

Route::post('/tambah-siswa/simpan', [
    StudentController::class, 'tambahStudent'
])->middleware(['auth', 'verified'])->name('tambah-siswa.simpan');

Route::get('/upload-file', function () {
    return view('upload-file');
})->middleware(['auth', 'verified'])->name('upload-file');

Route::get('/edit-kursus/{id}', [
    CourseController::class, 'tampilEditKursus'
])->middleware(['auth', 'verified'])->name('edit-kursus');

Route::put('/edit-kursus-simpan/{id}', [
    CourseController::class, 'updateKursus'
])->middleware(['auth', 'verified'])->name('edit-kursus.simpan');

Route::delete('/hapus-kursus/{id}', [
    CourseController::class, 'hapusKursus'
])->middleware(['auth', 'verified'])->name('hapus-kursus');

Route::get('/laporan', [
    CourseController::class, 'tampilKursusLaporan'
])->middleware(['auth', 'verified'])->name('laporan');

Route::get('/cetak-pdf', [
    CourseController::class, 'cetakPDF'
])->middleware(['auth', 'verified'])->name('cetak-pdf');

Route::get('/edit-siswa/{id}', [
    StudentController::class, 'tampilEditSiswa'
])->middleware(['auth', 'verified'])->name('edit-siswa');

Route::put('/edit-siswa-simpan/{id}', [
    StudentController::class, 'updateSiswa'
])->middleware(['auth', 'verified'])->name('edit-siswa.simpan');

Route::delete('/hapus-siswa/{id}', [
    StudentController::class, 'hapusSiswa'
])->middleware(['auth', 'verified'])->name('hapus-siswa');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
