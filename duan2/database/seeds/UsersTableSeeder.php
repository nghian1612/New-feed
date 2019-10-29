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
                'about_yourself' => 'Bạn Thuận tự giới thiệu về bản thân',
                'location' => 'Gò Vập, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'UI/UX Designer'
            ],
            [
                'name' => 'Nguyễn Chí Minh',
                'email' => 'minhnguyen@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Minh tự giới thiệu về bản thân',
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
                'about_yourself' => 'Bạn Hiếu tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '1',
                'gender' => '1',
                'estalish' => null,
                'title' => 'Mobile app Developer'
            ],
            [
                'name' => 'Nghĩa Nguyễn',
                'email' => 'nghianguyen@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Nghĩa tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => '1',
                'estalish' => null,
                'title' => 'chuyên ứng dụng mobie-website'
            ],
            [
                'name' => 'Dương Đình Kha',
                'email' => 'khaduong@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Bạn Kha tự giới thiệu về bản thân',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => '1',
                'estalish' => null,
                'title' => 'chuyên ứng dụng mobie-website'
            ],
            [
                'name' => 'Công Ty TNHH Công nghệ NMHT1',
                'email' => 'congty1@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Vài nét về công ty NMHT1',
                'location' => 'Phú Nhuận, Thành phố Hồ Chí Minh',
                'avatar' => 'user-pro-img.png',
                'background' => 'cover-img.jpg',
                'type_user' => '2',
                'gender' => null,
                'estalish' => '2010-10-01',
                'title' => 'chuyên ứng dụng mobie-website'
            ],
            [
                'name' => 'Công Ty TNHH Công nghệ JDNEJK',
                'email' => 'congty2@gmail.com',
                'password' => bcrypt('123456'),
                'about_yourself' => 'Vài nét về công ty JDNEJK',
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
