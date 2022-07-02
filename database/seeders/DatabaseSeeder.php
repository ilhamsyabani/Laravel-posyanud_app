<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::create([
            'name' => 'Admin Posyandu',
            'email' => 'admin.post@mail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        \App\Models\User::create([
            'name' => 'Member 1',
            'email' => 'member@mail.com',
            'password' => bcrypt('password'),
            'admin' => 0
        ]);

        \App\Models\Detail::create([
            'user_id' => '2',
            'nama' => 'Contoh Data',
            'NIK' => '0323138239189',
            'alamat' => 'jalan Raya Megelang',
            'no_hp' => '0822323221334',
            'agama' => 'Islam',
            'gender' => 'laki-laki',
            'darah' => 'AB',
            'pendidikan' => 'SMA',
            'ayah' => 'Ayah',
            'ibu' => 'Ibu',
            'riwaya_penyakit' => 'Tipes',
            'riwaya_keluarga' => '',
            'rokok' => 'no',
            'miras' => 'no'
        ]);
    }
}
