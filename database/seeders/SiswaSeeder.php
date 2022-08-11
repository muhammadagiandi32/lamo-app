<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Tagihan;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function dateRange($first, $last, $step = '+1 day', $format = 'Y-m-d')
    {
        $first = '2022-01-01';
        $last = '2022-12-01';
        $step = '+1 month';
        $format = 'Y-m-d';
        $dates = [];
        $current = strtotime($first);
        $last = strtotime($last);

        while ($current <= $last) {

            $dates[] = date($format, $current);
            $current = strtotime($step, $current);
        }

        return $dates;
    }
    
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

        // $startDay = Carbon::parse("2022-01-01");
        // $endDay = Carbon::parse("2022-12-01");
        // $period = $startDay->range($endDay, 1, 'month');

        $time = strtotime("2022.01.01");
        $final = ['2022.01.01', '2022.02.01', '2022.03.01', '2022.04.01', '2022.05.01', '2022.06.01', '2022.07.01', '2022.08.01', '2022.09.01', '2022.10.01', '2022.11.01', '2022.12.01'];

        foreach ($final as $date  => $value) {
            $date = $value;
        }

        for ($i = 1; $i < 13; $i++) {
            $tagihan = new Tagihan;

            $tagihan->id_siswa = '1';
            $tagihan->bulan_bayar = $date;
            $tagihan->total = 200000;
            $tagihan->save();
        }
    }
}
