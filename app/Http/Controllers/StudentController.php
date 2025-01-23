<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function tampilStudent()
    {
        $students = Student::with('course')->get();
        return view('pendaftaran', [
            'students' => $students
        ]);
    }

    public function tambahStudent(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string',
            'course_id' => 'required',
            'student_count' => 'required',
            'enrollment_date' => 'required',
            'payment_status' => 'required',
        ]);

        Student::create([
            'student_name' => $request->student_name,
            'course_id' => $request->course_id,
            'enrollment_date' => $request->enrollment_date,
            'payment_status' => $request->payment_status
        ]);

        Course::where('id', $request->course_id)->update([
            'student_count' => $request->student_count + 1
        ]);

        return redirect()->route('pendaftaran')->with('success', 'Data berhasil ditambahkan!');
    }

    public function tampilEditSiswa($id)
    {
        $data = Student::find($id);
        $course = Course::select('id', 'name', 'student_count')->get();

        if (!$data) {
            return redirect()->route('pendaftaran')->with('error', 'Data tidak ditemukan.');
        }

        return view('edit-siswa', [
            'data' => $data,
            'course' => $course
        ]);
    }

    public function updateSiswa(Request $request, $id)
    {
        $request->validate([
            'student_name' => 'required|string',
            'course_id' => 'required',
            'enrollment_date' => 'required',
            'payment_status' => 'required',
        ]);

        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('pendaftaran')->with('error', 'Data tidak ditemukan.');
        }

        $student->update([
            'student_name' => $request->student_name,
            'course_id' => $request->course_id,
            'enrollment_date' => $request->enrollment_date,
            'payment_status' => $request->payment_status
        ]);

        return redirect()->route('pendaftaran')->with('success', 'Data berhasil diupdate!');
    }

    public function hapusSiswa($id)
    {
        try {
            DB::transaction(function () use ($id) {
                $student = Student::find($id);

                if (!$student) {
                    throw new \Exception('Data tidak ditemukan.');
                }

                Course::where('id', $student->course_id)->update([
                    'student_count' => DB::raw('student_count - 1')
                ]);

                $student->delete();
            });

            return redirect()->route('pendaftaran')->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('pendaftaran')->with('error', 'Data gagal dihapus: ' . $e->getMessage());
        }
    }

}
