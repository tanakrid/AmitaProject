<?php

use Illuminate\Database\Seeder;
use App\sheet;

class SheetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(sheet::class, 20)->create();
    }
}
