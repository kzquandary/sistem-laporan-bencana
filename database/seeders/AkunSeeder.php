<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nama'=>'Administrator',
                'email'=>'admin@gmail.com',
                'password'=> bcrypt('admin'),
                'tgl_lahir'=>'2006-04-25',
                'role'=>'admin'
            ],
            [
                'nama'=>'Petugas',
                'email'=>'petugas@gmail.com',
                'password'=> bcrypt('petugas'),
                'tgl_lahir'=>'2002-01-25',
                'role'=>'petugas'
            ],
            [
                'nama'=>'Warga',
                'email'=>'warga@gmail.com',
                'password'=> bcrypt('warga'),
                'tgl_lahir'=>'1997-10-10',
                'role'=>'warga'
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
