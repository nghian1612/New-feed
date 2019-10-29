<?php

use Illuminate\Database\Seeder;

class UserskillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userskills')->insert([
            [
                'id_user'=> '1',
                'id_skill'=>'1',
            ],
            [
                'id_user'=> '1',
                'id_skill'=>'2',
            ],
            [
                'id_user'=> '2',
                'id_skill'=>'2',
            ],
            [
                'id_user'=> '3',
                'id_skill'=>'2',
            ],
            [
                'id_user'=> '2',
                'id_skill'=>'4',
            ],
            [
                'id_user'=> '1',
                'id_skill'=>'5',
            ],

            [
                'id_user'=> '3',
                'id_skill'=>'3',
            ],
            [
                'id_user'=> '4',
                'id_skill'=>'4',
            ],
        ]);
    }
}
