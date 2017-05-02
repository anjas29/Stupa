<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserAdminSeeder::class);
        $this->call(PeriodSeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(ClassesSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(DetailCourseSeeder::class);
    }
}

