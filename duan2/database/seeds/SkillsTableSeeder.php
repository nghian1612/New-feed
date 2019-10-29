<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            ['name'=>'HTML'],
            ['name'=>'CSS'],
            ['name'=>'PHP'],
            ['name'=>'Laravel'],
            ['name'=>'Python'],
            ['name'=>'C#/c++'],
            ['name'=>'UI/Ux Déign'],
            ['name'=>'Wordpress'],
            ['name'=>'Marketing'],
            ['name'=>'Quản lý doanh nghiệp'],
            ['name'=>'Nấu ăn'],
        ]);

    }
}
