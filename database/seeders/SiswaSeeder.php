<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Siswa;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i < 50; $i++) {

            $user = new User;

            $user->name = $faker->name();
            $user->nis = $faker->randomNumber(7);
            $user->role_id = 3;
            $user->email = $faker->unique()->safeEmail;
            $user->password = bcrypt('123123123');
            $user->save();


            $siswa = new Siswa;
            $siswa->hp = '0838' . $faker->randomNumber(8);;
            $siswa->user_id = $user->id;
            $siswa->nama_orangtua = $faker->name();
            $siswa->alamat = $faker->address();
            $siswa->kelas = $faker->randomElement([1, 2, 3]);
            $siswa->save();
        }
    }
}
