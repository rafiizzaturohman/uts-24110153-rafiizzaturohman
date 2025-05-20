<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            [
                'kd_driver'=>'D001',
                'name'=>'Rafi Izzaturohman',
                'phone'=>'08556423154',
                'order_num'=>'ORD001',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_driver'=>'D002',
                'name'=>'Adzima Hafidz',
                'phone'=>'08955446584',
                'order_num'=>'ORD002',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
