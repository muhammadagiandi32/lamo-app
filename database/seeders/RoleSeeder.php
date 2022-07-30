<?php

namespace Database\Seeders;

use App\Models\KetuaYayasan;
use App\Models\Role;
use App\Models\Siswa;
use App\Models\Tagihan;
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


        //tagihan 1
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-01-01',
                'total' => 200000
            ]
        );
        //2
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-02-01',
                'total' => 200000
            ]
        );
        //3
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-03-01',
                'total' => 200000
            ]
        );
        //4
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-04-01',
                'total' => 200000
            ]
        );
        //5
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-05-01',
                'total' => 200000
            ]
        );
        //6
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-06-01',
                'total' => 200000
            ]
        );
        //7
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-07-01',
                'total' => 200000
            ]
        );
        //8
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-08-01',
                'total' => 200000
            ]
        );
        //9
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-09-01',
                'total' => 200000
            ]
        );
        //10
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-10-01',
                'total' => 200000
            ]
        );
        //11
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-11-01',
                'total' => 200000
            ]
        );
        //12
        Tagihan::create(
            [
                'id_siswa' => '1',
                'bulan_bayar' => '2022-12-01',
                'total' => 200000
            ]
        );
    }
}
