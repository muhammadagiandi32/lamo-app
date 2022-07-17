<?php

namespace Database\Seeders;

use App\Models\KetuaYayasan;
use App\Models\Role;
use App\Models\Siswa;
use App\Models\User;
use App\Models\TataUsaha;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // ketua yayasan
        $role = Role::create([
            'nama' => 'ketua  yayasan'
        ]);

        $ketua = User::create([
            'name' => 'ketua',
            'nik' => '73737373',
            'email' => 'ketua@gmail.com',
            'password' => bcrypt('123123123'),
            'role_id' => $role->id
        ]);

        KetuaYayasan::create([
            'user_id' => $ketua->id,
            'hp' => '085123456789',
            'alamat' => 'jl. gajah'
        ]);


        // tatausaha
        $role = Role::create([
            'nama' => 'tata usaha'
        ]);

        $tu = User::create([
            'name' => 'tu',
            'nik' => '53535353',
            'email' => 'tu@gmail.com',
            'password' => bcrypt('123123123'),
            'role_id' => $role->id
        ]);

        TataUsaha::create([
            'user_id' => $tu->id,
            'hp' => '085123456789',
            'alamat' => 'jl. gajah'
        ]);

        // siswa
        $role = Role::create([
            'nama' => 'siswa'
        ]);

        $siswa = User::create([
            'name' => 'agi',
            'nis' => '7050800',
            'email' => 'agi@gmail.com',
            'password' => bcrypt('123123123'),
            'role_id' => $role->id
        ]);

        Siswa::create([
            'user_id' => $siswa->id,
            'nama_orangtua' => 'Dede',
            'hp' => '085123456789',
            'alamat' => 'jl. gajah',
            'kelas' => '10 Ipa'
        ]);
    }
}
