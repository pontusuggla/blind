<?php

use Illuminate\Database\Seeder;

class LetterpairTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\LetterpairTest::class, 1000)->create();
    }
}
