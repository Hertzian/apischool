<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Users::class,
            Groups::class,
            Students::class,
            Matters::class,
            Homeworks::class,
            Exams::class,
            Tutors::class,
        ]);
    }
}
