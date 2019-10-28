<?php

use Illuminate\Database\Seeder;
use App\sheet;
use Illuminate\Support\Facades\Hash;
use App\User;

class SheetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Administrator';
        $user->email = 'admin@apollo11.com';
        $user->password = Hash::make('admin');
        $user->email_verified_at = now();
        $user->save();

        factory(sheet::class, 20)->create([
            'user_id' => $user->id
        ]);
    }
}
