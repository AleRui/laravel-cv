<?php

use App\PresentationLetter;
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
            // main
            UserSeeder::class,
            // secondary
            PresentationLetterSeeder::class,
            StudySeeder::class,
            WorkExperienceSeeder::class,
        ]);
    }
}
