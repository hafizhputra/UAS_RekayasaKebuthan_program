<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Service;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {
        DB::table('services')->insert([
            [
                'name' => 'vaksin hewan',
                'price' => 200000,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'operasi sterilisasi',
                'price' => 250000,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'bedah insidentil',
                'price' => 200000,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'inseminasi buatan',
                'price' => 150000,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'pemeriksaan umum',
                'price' => 50000,
                'created_at' => Carbon::now()
            ],

            ]);
    }
}
