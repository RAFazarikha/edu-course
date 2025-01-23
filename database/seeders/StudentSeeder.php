<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'student_name' => 'John Doe',
                'course_id' => 1,
                'enrollment_date' => Carbon::now()->subDays(10)->toDateString(),
                'payment_status' => 'Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Jane Smith',
                'course_id' => 2,
                'enrollment_date' => Carbon::now()->subDays(15)->toDateString(),
                'payment_status' => 'Belum Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Michael Brown',
                'course_id' => 1,
                'enrollment_date' => Carbon::now()->subDays(20)->toDateString(),
                'payment_status' => 'Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Emily Davis',
                'course_id' => 3,
                'enrollment_date' => Carbon::now()->subDays(5)->toDateString(),
                'payment_status' => 'Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Chris Johnson',
                'course_id' => 2,
                'enrollment_date' => Carbon::now()->subDays(12)->toDateString(),
                'payment_status' => 'Belum Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Sarah Wilson',
                'course_id' => 1,
                'enrollment_date' => Carbon::now()->subDays(8)->toDateString(),
                'payment_status' => 'Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'David Martinez',
                'course_id' => 3,
                'enrollment_date' => Carbon::now()->subDays(18)->toDateString(),
                'payment_status' => 'Belum Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Laura Garcia',
                'course_id' => 2,
                'enrollment_date' => Carbon::now()->subDays(22)->toDateString(),
                'payment_status' => 'Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Kevin Miller',
                'course_id' => 1,
                'enrollment_date' => Carbon::now()->subDays(7)->toDateString(),
                'payment_status' => 'Belum Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Sophia Martinez',
                'course_id' => 3,
                'enrollment_date' => Carbon::now()->subDays(3)->toDateString(),
                'payment_status' => 'Lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
