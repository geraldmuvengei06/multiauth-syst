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
        // $this->call(UsersTableSeeder::class);

        factory(App\Models\School::class, 1)->create();

        factory(App\Models\Campus::class, 3)->create();

        factory(App\Models\Department::class, 8)->create();

        factory(App\Models\Course::class, 20)->create();

        factory(App\Models\Klass::class, 8)->create();

        factory(App\Models\Student::class, 100)->create();

    }
}
