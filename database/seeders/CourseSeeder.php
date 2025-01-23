<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'name' => 'Web Development',
                'description' => 'Belajar membangun website modern menggunakan Laravel dan TailwindCSS.',
                'price' => 2500000.00,
                'status' => true,
                'student_count' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Data Science',
                'description' => 'Pelajari analisis data dengan Python, R, dan alat visualisasi data.',
                'price' => 3000000.00,
                'status' => true,
                'student_count' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Digital Marketing',
                'description' => 'Strategi pemasaran digital untuk meningkatkan penjualan.',
                'price' => 1500000.00,
                'status' => false,
                'student_count' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'UI/UX Design',
                'description' => 'Belajar desain antarmuka yang menarik dan mudah digunakan.',
                'price' => 2000000.00,
                'status' => true,
                'student_count' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Belajar membuat aplikasi mobile dengan Flutter dan React Native.',
                'price' => 3000000.00,
                'status' => true,
                'student_count' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
