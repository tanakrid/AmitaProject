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
        $this->call(SheetsTableSeeder::class);
        // $this->call(CommentsTableSeeder::class);
        // $this->call(OwnSheetsTableSeeder::class);
        // $this->call(PostCommentsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        // $this->call(SheetTransectionsTableSeeder::class);
        // $this->call(TransectionsTableSeeder::class);
    }
}
