<?php

use Illuminate\Database\Seeder;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educations')->insert([
            [
                'name_school'=>'FPT Polytechnic',
                'form_time'=>'2019-10-2',
                'to_time' =>'2016-11-2',
                'career' =>'Thiết kế website',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha',
                'id_user'=>'1'
            ],
            [
                'name_school'=>'FPT Polytechnic',
                'form_time'=>'2019-10-2',
                'to_time' =>'2016-11-2',
                'career' =>'Thiết kế website',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha',
                'id_user'=>'2'
            ],
            [
                'name_school'=>'FPT Polytechnic',
                'form_time'=>'2019-10-2',
                'to_time' =>'2016-11-2',
                'career' =>'Thiết kế website',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha',
                'id_user'=>'3'
            ],
            [
                'name_school'=>'FPT Polytechnic',
                'form_time'=>'2019-10-2',
                'to_time' =>'2016-11-2',
                'career' =>'Thiết kế website',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha',
                'id_user'=>'4'
            ],
        ]);
    }
}
