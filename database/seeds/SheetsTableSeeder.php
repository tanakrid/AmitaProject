<?php

use Illuminate\Database\Seeder;
use App\Sheet;
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
        // $user->id = 1;
        $user->name = 'Administrator';
        $user->email = 'admin@apollo11.com';
        $user->password = Hash::make('admin');
        $user->email_verified_at = now();
        $user->role = 'ADMIN';
        $user->save();

        $sheet = new Sheet;
        $sheet->id = 1;
        $sheet->sheet_name = 'sorting data list';
        $sheet->sheet_type = 'introduction of computing';
        $sheet->autor_name = 'Mr. porngparng';
        $sheet->subject_id = 'cs491';
        $sheet->sec_number = '1';
        $sheet->sheet_src = 'https://docs.google.com/document/d/1-SghqZd5aPo10XIhmNniczlU13TixGK15-Yy6dxaE8I/edit';
        $sheet->instructor = 'Mr. horklug';
        $sheet->price = 150.0;
        $sheet->rating = 'GOOD';
        $sheet->view_count = 15;
        $sheet->user_id = $user->id;
        $sheet->save();


        factory(Sheet::class, 20)->create([
            'user_id' => $user->id
        ]);
    }
}
