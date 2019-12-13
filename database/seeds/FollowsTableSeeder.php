<?php

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follows')->insert([
            [   
                'id_user' => '2',
                'id_mid' => '1',
            ],
            [
                'id_user' => '3',
                'id_mid' => '1',
            ],
            [
                'id_user' => '4',
                'id_mid' => '1',
            ],
            [
                'id_user' => '5',
                'id_mid' => '1',
            ],
            [
                'id_user' => '6',
                'id_mid' => '1',
            ],[
                'id_user' => '7',
                'id_mid' => '1',
            ],
        ]);
    }
}
