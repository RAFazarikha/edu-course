<?php

namespace App\Http\Controllers;

use import;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class CourseController extends Controller
{
    public function tampilKursusDashboard()
    {
        $courses = Course::all();
        foreach ($courses as $course) {
            $course->human_readable_date = $course->updated_at->locale('id')->diffForHumans();
        }
        return view('dashboard', [
            'courses' => $courses
        ]);
    }

    public function tampilKursusLaporan()
    {
        $courses = Course::all();
        foreach ($courses as $course) {
            $course->human_readable_date = $course->updated_at->locale('id')->diffForHumans();
        }
        return view('laporan', [
            'courses' => $courses
        ]);
    }

    public function tampilKursus()
    {
        $courses = Course::all();
        return view('kursus', [
            'courses' => $courses
        ]);
    }

    public function tambahKursus(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|boolean',
        ]);
        
        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'student_count' => 0
        ]);

        return redirect()->route('kursus')->with('success', 'Data berhasil ditambahkan!');
    }

    public function tampilIDKursus()
    {
        $course = Course::select('id', 'name', 'student_count')->get();

        $today = date('Y-m-d');

        return view('tambah-siswa', [
            'course' => $course,
            'today' => $today
        ]);
    }

    public function tampilEditKursus($id)
    {
        $data = Course::find($id);

        if (!$data) {
            return redirect()->route('kursus')->with('error', 'Data tidak ditemukan.');
        }

        return view('edit-kursus', compact('data'));
    }

    public function updateKursus(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|boolean',
        ]);

        Course::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status
        ]);

        return redirect()->route('kursus')->with('success', 'Data berhasil diubah!');
    }

    public function hapusKursus($id)
    {
        $data = Course::find($id);

        if (!$data) {
            return redirect()->route('kursus')->with('error', 'Data tidak ditemukan.');
        }

        $data->delete();

        return redirect()->route('kursus')->with('success', 'Data berhasil dihapus!');
    }

    public function cetakPDF()
    {

        $courses = Course::all();

        $pdf = Pdf::loadView('laporan.pdf', compact('courses'));


        return $pdf->download('laporan-kursus.pdf');
    }
}
