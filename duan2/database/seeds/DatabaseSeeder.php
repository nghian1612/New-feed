<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UsersTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(EducationsTableSeeder::class);
        $this->call(ExternallinksTableSeeder::class);
        $this->call(FeedskillsTableSeeder::class);
        $this->call(FeedsTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(UserskillsTableSeeder::class);
        $this->call(FollowsTableSeeder::class);
    }
}
