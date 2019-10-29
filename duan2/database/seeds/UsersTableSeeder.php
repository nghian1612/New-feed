<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Tăng Diệp Thuận',
                'email' => 'thuantang@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.',
                'location' => 'Gò Vập, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '0',
                'gender' => '1',
                'estalish' => null,
                'title' => 'UI/UX Designer'
            ],
            [
                'name' => 'Nguyễn Chí Minh',
                'email' => 'minhnguyen@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Front-end Developer'
            ],
            [
                'name' => 'Trương Trung Hiếu',
                'email' => 'hieutruong@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Mobile app Developer'
            ],
            [
                'name' => 'Công Ty TNHH Công nghệ NMHT',
                'email' => 'nghianguyen@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => null,
                'estalish' => '2010-10-01',
                'title' => 'chuyên ứng dụng mobie-website'
            ],
            [
                'name' => 'Công Ty TNHH Công nghệ NMHT1',
                'email' => 'nghianguyen1@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => null,
                'estalish' => '2010-10-01',
                'title' => 'chuyên ứng dụng mobie-website'
            ],
        ]);
    }
}
