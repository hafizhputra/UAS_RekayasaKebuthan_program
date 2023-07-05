<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Reservation;
use App\Models\Service;
use Database\Seeders\ServiceSeeder;

use App\Models\User;
use Database\Seeders\UserSeeder;

use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {

        //jalankan seeder category
        $this->call(ServiceSeeder::class);
        $this->call(UserSeeder::class);

        //ambil data kategori
        $service1 = Service::where('name', 'vaksin hewan')->first();
        $service2 = Service::where('name', 'operasi sterilisasi')->first();
        $service3 = Service::where('name', 'bedah insidentil')->first();
        $service4 = Service::where('name', 'inseminasi buatan')->first();
        $service5 = Service::where('name', 'pemeriksaan umum')->first();

        $user2 = User::where('name','Customer')->first();



        DB::table('reservations')->insert([
            [
                'user_id'  => $user2->id,
                'pet_name' => 'anjing',
                'pet_type' => 'mamalia',
                'pet_gender' => 'jantan',
                'service_id' => $service5->id,
                'status' => 'Pending',
                'date' =>  now(),
                'created_at' => now()

            ],
            [

                'user_id'  => $user2->id,
                'pet_name' => 'kucing',
                'pet_type' => 'mamalia',
                'pet_gender' => 'jantan',
                'service_id' => $service5->id,
                'status' => 'Accepted',
                'date' =>  now(),
                'created_at' => now()
            ],
            [

                'user_id' => $user2->id,
                'pet_name' => 'sapi',
                'pet_type' => 'mamalia',
                'pet_gender' => 'jantan',
                'service_id' => $service1->id,
                'status' => 'Rejected',
                'date' =>  now(),
                'created_at' => now()
            ],


            ]);
    }
}
